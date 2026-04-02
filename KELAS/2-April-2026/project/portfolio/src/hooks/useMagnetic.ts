import { RefObject, useCallback } from 'react'

export function useMagnetic(ref: RefObject<HTMLElement>, strength = 0.15) {
  const handleMouseMove = useCallback((e: MouseEvent) => {
    if (!ref.current) return

    const rect = ref.current.getBoundingClientRect()
    const x = e.clientX - rect.left - rect.width / 2
    const y = e.clientY - rect.top - rect.height / 2

    ref.current.style.transform = `translate(${x * strength}px, ${y * strength}px)`
  }, [ref, strength])

  const handleMouseLeave = useCallback(() => {
    if (ref.current) {
      ref.current.style.transform = ''
    }
  }, [ref])

  return {
    onMouseMove: handleMouseMove,
    onMouseLeave: handleMouseLeave
  }
}

