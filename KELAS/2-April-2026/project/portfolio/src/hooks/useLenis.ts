import { useEffect, useState } from 'react'

export function useLenis() {
  const [ready, setReady] = useState(false)

  useEffect(() => {
    if (typeof window === 'undefined') return

    // @ts-ignore
    const lenis = new (window as any).Lenis({
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

