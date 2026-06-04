import { ButtonHTMLAttributes, forwardRef } from 'react'
import { cn } from '@/lib/utils'

const buttonVariants = {
  default: 'bg-primary text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4 rounded-md text-sm font-medium transition-all duration-200 flex items-center gap-2 shadow-lg hover:shadow-neon-green hover:-translate-y-0.5 active:scale-95',
  ghost: 'hover:bg-accent hover:text-accent-foreground h-10 px-4 rounded-md text-sm font-medium transition-colors',
  outline: 'border border-input hover:bg-accent hover:text-accent-foreground bg-background shadow-sm h-10 rounded-md text-sm font-medium transition-all',
  destructive: 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
  neon: 'bg-gradient-to-r from-neon-green to-neon-blue text-white shadow-neon-green hover:shadow-neon-blue/50 font-semibold tracking-wide transition-all duration-300 hover:scale-105',
  glass: 'glass text-foreground/90 backdrop-blur-sm border border-border/50 hover:border-neon-green hover:shadow-neon-green/30 transition-all duration-300'
}

interface ButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
  variant?: keyof typeof buttonVariants
  size?: 'sm' | 'md' | 'lg' | 'xl'
  isLoading?: boolean
}

const Button = forwardRef<HTMLButtonElement, ButtonProps>(
  ({ className, variant = 'default', size = 'md', isLoading, children, ...props }, ref) => {
    return (
      <button
        className={cn(
          'inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50',
          buttonVariants[variant as keyof typeof buttonVariants],
          {
            'h-9 px-4': size === 'sm',
            'h-10 px-6': size === 'md',
            'h-12 px-8': size === 'lg',
            'h-16 px-12 py-8': size === 'xl'
          },
          isLoading && 'animate-pulse cursor-not-allowed',
          className
        )}
        ref={ref}
        disabled={isLoading}
        {...props}
      >
        {isLoading ? 'Loading...' : children}
      </button>
    )
  }
)

Button.displayName = 'Button'

export { Button }

