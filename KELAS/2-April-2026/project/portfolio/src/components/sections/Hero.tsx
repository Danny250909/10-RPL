import { motion } from 'framer-motion'
import { Suspense as ReactSuspense } from 'react'
import { Canvas } from '@react-three/fiber'
import { Float, MeshDistortMaterial } from '@react-three/drei'
import { useTypewriter } from '@/hooks/useTypewriter'
import { useTheme } from '@/hooks/useTheme'
import { Button } from '@/components/ui/Button'
import { MagneticButton } from '@/components/ui/MagneticButton'
// import { cn } from '@/lib/utils' // Not used
import { ArrowRight, Download, Code2, User } from 'lucide-react'
import { useState, useEffect, useCallback } from 'react'
// import type { HeroData } from '@/data/hero' // infer from as const
import { heroData } from '@/data/hero'

const { name, titles }: { name: string; titles: string[] } = heroData

function Scene3D() {
  return (
    <Canvas 
      className="absolute inset-0 z-0"
      camera={{ position: [0, 0, 5] }}
      gl={{ alpha: true, antialias: true }}
    >
      <color attach="background" args={['transparent']} />
      <ambientLight intensity={0.5} />
      <pointLight position={[10, 10, 10]} />

      <Float speed={2} rotationIntensity={1} floatIntensity={1}>
        <mesh position={[-2, 1, 0]} scale={0.8}>
          <dodecahedronGeometry args={[1]} />
          <MeshDistortMaterial color="#22c55e" speed={2} distort={0.4} />
        </mesh>
      </Float>

      <Float speed={1.5} rotationIntensity={1.2} floatIntensity={1.2}>
        <mesh position={[1.5, -0.5, -1]} scale={1}>
          <icosahedronGeometry args={[1]} />
          <MeshDistortMaterial color="#3b82f6" speed={3} distort={0.3} />
        </mesh>
      </Float>

      <Float speed={2.5} rotationIntensity={0.8} floatIntensity={0.8}>
        <mesh position={[0, -1.5, 1]} scale={0.6}>
          <tetrahedronGeometry args={[1]} />
          <MeshDistortMaterial color="#a855f7" speed={1} distort={0.5} />
        </mesh>
      </Float>
    </Canvas>
  )
}

export function Hero() {
  const [scrollIndicator, setScrollIndicator] = useState(false)
  const typewriterText = useTypewriter(titles)
  const { toggledTheme } = useTheme()
  
  // Resize handler for Canvas
  const handleResize = useCallback(() => {
    // Trigger canvas resize by updating gl size - fiber handles automatically
  }, [])

  useEffect(() => {
    const handleScroll = () => {
      setScrollIndicator(window.scrollY > 50) // Improved threshold
    }
    const resizeObserver = new ResizeObserver(handleResize)
    window.addEventListener('scroll', handleScroll)
    resizeObserver.observe(document.body)
    
    return () => {
      window.removeEventListener('scroll', handleScroll)
      resizeObserver.disconnect()
    }
  }, [handleResize])

  const neonGradient = toggledTheme === 'dark' 
    ? 'from-neon-green via-foreground to-neon-blue' 
    : 'from-primary via-foreground to-purple-500'

  return (
    <section 
      id="home" 
      role="banner"
      aria-labelledby="hero-title"
      className="min-h-screen flex items-center justify-center relative overflow-hidden pt-20"
    >
      <ReactSuspense fallback={
        <div className="absolute inset-0 z-0 flex items-center justify-center bg-gradient-to-br from-background/50 to-muted/50">
          <div className="w-32 h-32 border-4 border-border/30 rounded-full animate-spin" />
        </div>
      }>
        <Scene3D />
      </ReactSuspense>

      <div className="relative z-20 container mx-auto px-6 text-center max-w-5xl">
        <motion.div 
          initial={{ opacity: 0, y: 50 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          className="space-y-8"
        >
          <MagneticButton strength={0.02}>
            <motion.div 
              role="img"
              aria-label="Profile avatar"
              className="glass w-48 h-48 md:w-64 md:h-64 mx-auto rounded-3xl shadow-2xl border-4 border-border/30 p-1"
              animate={{ 
                rotate: [0, 5, -5, 0],
                scale: [1, 1.02, 1]
              }}
              transition={{ 
                duration: 8,
                repeat: Infinity,
                ease: "easeInOut"
              }}
            >
              <div className="w-full h-full bg-gradient-to-br from-background to-muted rounded-3xl shadow-xl overflow-hidden relative group">
                <div className="absolute inset-0 bg-gradient-to-r from-neon-green to-neon-blue opacity-0 group-hover:opacity-20 transition-opacity duration-500" />
                <div className="w-full h-full bg-gradient-radial from-neon-green/20 to-transparent rounded-3xl flex items-center justify-center">
                  <User className="w-32 h-32 text-foreground/50 animate-pulse" />
                </div>
              </div>
            </motion.div>
          </MagneticButton>

          <motion.h1 
            id="hero-title"
            className={`text-5xl md:text-7xl lg:text-8xl font-black bg-gradient-to-r ${neonGradient} bg-clip-text text-transparent leading-tight`}
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            Hi, I'm{' '}
            <span className={neonGradient === 'from-primary via-foreground to-purple-500' ? 'from-primary to-purple-500 bg-clip-text text-transparent bg-gradient-to-r' : ''}>
              {name}
            </span>
          </motion.h1>

          <motion.div
            className="text-2xl md:text-3xl lg:text-4xl text-muted-foreground font-medium relative"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            transition={{ duration: 0.8, delay: 0.4 }}
            aria-live="polite"
          >
            <span>{typewriterText}</span>
            <span className="animate-pulse ml-1 inline-block w-4 h-10 bg-gradient-to-r from-neon-green to-neon-blue" />
          </motion.div>

          <motion.div 
            className="flex flex-col sm:flex-row gap-6 justify-center pt-8"
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.6 }}
          >
            <MagneticButton>
              <Button size="xl" className="neon text-xl px-12 py-8 font-bold shadow-2xl" aria-label="View my work">
                <Code2 className="h-6 w-6 mr-3" />
                View My Work
                <ArrowRight className="h-6 w-6 ml-3 group-hover:translate-x-2 transition-transform" />
              </Button>
            </MagneticButton>
            <MagneticButton>
              <Button 
                variant="glass" 
                size="xl" 
                className="text-xl px-12 py-8 font-bold border-2 border-border/50 hover:border-neon-green"
                aria-label="Download CV"
              >
                <Download className="h-6 w-6 mr-3" />
                Download CV
              </Button>
            </MagneticButton>
          </motion.div>

          <motion.div 
            className="mt-24 flex flex-col items-center gap-4"
            animate={{ opacity: scrollIndicator ? 0 : 1 }}
            transition={{ duration: 0.5 }}
          >
            <div className="w-px h-12 bg-gradient-to-b from-neon-green to-transparent animate-pulse" />
            <p className="text-lg font-medium text-muted-foreground uppercase tracking-wider animate-pulse">
              Scroll to Explore
            </p>
            <div className="w-6 h-6 border-2 border-neon-green/50 rounded-full animate-bounce" />
          </motion.div>
        </motion.div>
      </div>
    </section>
  )
}

