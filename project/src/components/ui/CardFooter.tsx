import { ReactNode } from 'react'
// import { cn } from '@/lib/utils'

interface CardFooterProps {
  children: ReactNode
  className?: string
}

export function CardFooter({ children, className }: CardFooterProps) {
  return (
    <div className="flex flex-col gap-4 pt-6 border-t border-border/30" {...(className && {className})}>
      {children}
    </div>
  )
}

