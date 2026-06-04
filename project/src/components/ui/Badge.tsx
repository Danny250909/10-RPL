import { motion } from 'framer-motion'
import { cn } from '@/lib/utils'
import { ReactNode } from 'react'

interface BadgeProps {
  children: ReactNode
  className?: string
  variant?: 'default' | 'neon' | 'glass'
}

export function Badge({ children, className, variant = 'default' }: BadgeProps) {
  return (
    <motion.span 
      className={cn(
        'inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wide border animate-in slide-in-from-top-2 duration-300',
        {
          'bg-primary/20 text-primary border-primary/30': variant === 'default',
          'bg-gradient-to-r from-neon-green to-neon-blue text-white border-neon-green/50 shadow-neon-green/50': variant === 'neon',
          'glass text-foreground/90 border-border/50 backdrop-blur-sm': variant === 'glass',
        },
        className
      )}
      whileHover={{ scale: 1.05 }}
      transition={{ type: "spring", stiffness: 400, damping: 17 }}
    >
      {children}
    </motion.span>
  )
}

