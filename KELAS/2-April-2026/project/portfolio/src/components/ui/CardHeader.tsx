import { ReactNode } from 'react'
// import { cn } from '@/lib/utils'

interface CardHeaderProps {
  children: ReactNode
  className?: string
}

export function CardHeader({ children, className }: CardHeaderProps) {
  return (
    <div className="space-y-2 mb-6" {...(className && {className})}>
      {children}
    </div>
  )
}

