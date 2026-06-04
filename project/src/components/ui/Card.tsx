// import { cn } from '@/lib/utils'
import { ReactNode } from 'react'
import { CardHeader } from './CardHeader'
import { CardContent } from './CardContent'
import { CardFooter } from './CardFooter'

interface CardProps {
  children: ReactNode
  className?: string
  header?: string
  subheader?: string
}

export function Card({ children, className }: CardProps) {
  return (
    <div className="glass rounded-2xl p-8 border shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 relative group" {...(className && {className})}>
      {children}
    </div>
  )
}

export { CardHeader, CardContent, CardFooter }

