import { useEffect, useState } from 'react'

export function useLenis() {
  const [ready, setReady] = useState(false)

  useEffect(() => {
    if (typeof window === 'undefined') return

    const LenisCtor = (window as any).Lenis
    if (!LenisCtor) {
      // Lenis script belum load / tidak tersedia => jangan crash, biarkan halaman tetap tampil.
      setReady(true)
      return
    }

    const lenis = new LenisCtor({
      duration: 1.2,
      easing: (t: number) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    })

    const raf = (time: number) => {
      lenis.raf(time)
      requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
    setReady(true)

    return () => {
      lenis.destroy()
    }
  }, [])

  return { ready }
}

