import { cn } from '@/lib/utils'
import { ReactNode } from 'react'
import { Header } from './Header'
import { Footer } from './Footer'
import { useLenis } from '@/hooks/useLenis'

interface LayoutProps {
  children: ReactNode
}

export function Layout({ children }: LayoutProps) {
  const { ready } = useLenis()

  return (
    <div className="min-h-screen bg-gradient-to-br from-background via-background/50 to-accent/20">
      <Header />
      <main className={cn("transition-opacity duration-500", ready ? 'opacity-100' : 'opacity-50')}>
        {children}
      </main>
      <Footer />
    </div>
  )
}


