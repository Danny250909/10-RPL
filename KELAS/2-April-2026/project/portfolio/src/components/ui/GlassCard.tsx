import { cn } from '@/lib/utils'
import { ReactNode } from 'react'

export function GlassCard({ 
  children, 
  className = '', 
  hoverScale = true 
}: { 
  children: ReactNode 
  className?: string 
  hoverScale?: boolean 
}) {
  return (
    <div className={cn(
      'glass backdrop-blur-xl rounded-3xl p-8 border border-border/30 shadow-2xl',
      'hover:shadow-neon-green/40 hover:border-neon-green/50 transition-all duration-500',
      hoverScale && 'hover:scale-[1.02] hover:-translate-y-3',
      className
    )}>
      {children}
    </div>
  )
}

