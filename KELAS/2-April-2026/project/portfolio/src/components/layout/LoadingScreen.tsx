import { motion } from 'framer-motion'
import { useLenis } from '@/hooks/useLenis'
import { useEffect, useState } from 'react'

export function LoadingScreen() {
  const { ready } = useLenis()
  const [progress, setProgress] = useState(0)

  useEffect(() => {
    const timer = setInterval(() => {
      setProgress((prev) => {
        if (prev >= 95) {
          return prev
        }
        return prev + Math.random() * 5
      })
    }, 200)

    const readyTimer = setTimeout(() => {
      if (ready) {
        setProgress(100)
        setTimeout(() => {
          document.body.classList.remove('overflow-hidden')
          document.documentElement.classList.add('loaded')
        }, 600)
      }
    }, 1500)

    return () => {
      clearInterval(timer)
      clearTimeout(readyTimer)
    }
  }, [ready])

  return (
    <motion.div 
      className="fixed inset-0 z-[9999] bg-background flex flex-col items-center justify-center overflow-hidden pointer-events-none"
      initial={{ opacity: 1 }}
      exit={{ opacity: 0 }}
      transition={{ duration: 0.6 }}
    >
      {/* Logo */}
      <motion.div 
        className="flex items-center gap-4 mb-12"
        animate={{ 
          scale: [1, 1.1, 1],
          rotate: [0, 180, 360]
        }}
        transition={{ 
          duration: 2,
          repeat: Infinity,
          ease: "easeInOut"
        }}
      >
        <div className="w-20 h-20 bg-gradient-to-r from-neon-green to-neon-blue rounded-2xl shadow-2xl shadow-neon-green/50 flex items-center justify-center animate-spin-slow">
          <div className="w-12 h-12 bg-background rounded-xl shadow-inner flex items-center justify-center font-bold text-neon-green">
            RP
          </div>
        </div>
        <motion.div 
          className="text-4xl font-black bg-gradient-to-r from-neon-green to-neon-blue bg-clip-text text-transparent tracking-tight"
          animate={{ y: [0, -10, 0] }}
          transition={{ duration: 2, repeat: Infinity }}
        >
          Portfolio
        </motion.div>
      </motion.div>

      {/* Progress Bar */}
      <div className="w-full max-w-md bg-background/50 backdrop-blur-sm rounded-full h-2 overflow-hidden border border-border/50 shadow-lg">
        <motion.div 
          className="h-full bg-gradient-to-r from-neon-green to-neon-blue shadow-neon-green rounded-full origin-left"
          initial={{ scaleX: 0 }}
          animate={{ scaleX: progress / 100 }}
          transition={{ duration: 0.3, ease: "easeOut" }}
        />
      </div>
      
      <motion.div 
        className="mt-8 text-sm text-muted-foreground tracking-wider font-mono uppercase"
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ delay: 0.5 }}
      >
        Loading {Math.round(progress)}%
      </motion.div>
    </motion.div>
  )
}

