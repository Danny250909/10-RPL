import { ThemeProvider as ThemeContextProvider } from '@/context/ThemeContext'

interface ThemeProviderProps {
  children: React.ReactNode
}

export function ThemeProvider({ children }: ThemeProviderProps) {
  return (
    <ThemeContextProvider>
      {children}
    </ThemeContextProvider>
  )
}

