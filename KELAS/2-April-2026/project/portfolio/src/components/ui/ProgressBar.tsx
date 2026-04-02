import { cn } from '@/lib/utils'

interface ProgressBarProps {
  value: number
  max?: number
  className?: string
  label?: string
  color?: 'green' | 'blue' | 'purple'
}

const colors = {
  green: 'bg-neon-green',
  blue: 'bg-neon-blue',
  purple: 'bg-purple-500'
}

export function ProgressBar({ 
  value, 
  max = 100, 
  className, 
  label, 
  color = 'green' 
}: ProgressBarProps) {
  const percentage = (value / max) * 100

  return (
    <div className="space-y-2">
      {label && (
        <div className="flex justify-between text-sm font-medium">
          <span>{label}</span>
          <span>{Math.round(percentage)}%</span>
        </div>
      )}
      <div className={cn('h-3 bg-background/50 rounded-full overflow-hidden shadow-inner')}>
        <div 
          className={cn(
            'h-full rounded-full shadow-neon-green transition-all duration-1000 ease-out origin-left',
            colors[color],
            className
          )}
          style={{ width: `${percentage}%` }}
        />
      </div>
    </div>
  )
}

