import { motion } from 'framer-motion'
import { useEffect, useState, useRef } from 'react'
// import { cn } from '@/lib/utils' // Unused

export function Cursor() {
  const [mousePosition, setMousePosition] = useState({ x: 0, y: 0 })
  const [isVisible, setIsVisible] = useState(true)
  const [cursorSize, setCursorSize] = useState(20)

  useEffect(() => {
    const handleMouseMove = (e: MouseEvent) => {
      setMousePosition({ x: e.clientX, y: e.clientY })
    }

    const handleMouseEnter = () => setIsVisible(true)
    const handleMouseLeave = () => setIsVisible(false)

    window.addEventListener('mousemove', handleMouseMove)
    window.addEventListener('mouseenter', handleMouseEnter)
    window.addEventListener('mouseleave', handleMouseLeave)

    return () => {
      window.removeEventListener('mousemove', handleMouseMove)
      window.removeEventListener('mouseenter', handleMouseEnter)
      window.removeEventListener('mouseleave', handleMouseLeave)
    }
  }, [])

  const handleHover = () => setCursorSize(40)
  const handleLeave = () => setCursorSize(20)

  return (
    <div className="fixed inset-0 pointer-events-none z-[99999] select-none mix-blend-difference">
      <motion.div
        className="fixed rounded-full bg-gradient-to-r from-neon-green to-blue-400 blur-sm"
        style={{
          left: mousePosition.x - cursorSize / 2,
          top: mousePosition.y - cursorSize / 2,
          width: cursorSize,
          height: cursorSize
        }}
        animate={{
          scale: isVisible ? 1 : 0,
          opacity: isVisible ? 1 : 0
        }}
        transition={{
          type: 'spring',
          stiffness: 300,
          damping: 30
        }}
        onHoverStart={handleHover}
        onHoverEnd={handleLeave}
      />
      <motion.div
        className="fixed w-[8px] h-[8px] bg-neon-green rounded-full mix-blend-difference"
        style={{
          left: mousePosition.x - 4,
          top: mousePosition.y - 4
        }}
        animate={{
          opacity: isVisible ? 1 : 0
        }}
        transition={{
          duration: 0.1
        }}
      />
    </div>
  )
}

