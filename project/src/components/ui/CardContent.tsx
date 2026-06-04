import { ReactNode } from 'react'
// import { cn } from '@/lib/utils'

interface CardContentProps {
  children: ReactNode
  className?: string
}

export function CardContent({ children, className }: CardContentProps) {
  return (
    <div className="space-y-4" {...(className && {className})}>
      {children}
    </div>
  )
}

