import { useState } from 'react'
import { useTheme } from '@/hooks/useTheme'
import { Button } from '@/components/ui/Button'
import { Menu, Sun, Moon, Languages, Github } from 'lucide-react'
import { MagneticButton } from '@/components/ui/MagneticButton'

export function Header() {
  const [isOpen, setIsOpen] = useState(false)
  const { theme, setTheme, toggledTheme } = useTheme()

  const toggleMenu = () => setIsOpen(!isOpen)

  const navItems = [
    { id: 'home', idLabel: 'Beranda', enLabel: 'Home' },
    { id: 'about', idLabel: 'Tentang', enLabel: 'About' },
    { id: 'projects', idLabel: 'Proyek', enLabel: 'Projects' },
    { id: 'contact', idLabel: 'Kontak', enLabel: 'Contact' }
  ]

  return (
    <header className="glass backdrop-blur-md fixed top-0 left-1/2 -translate-x-1/2 z-50 w-full max-w-6xl mx-auto rounded-b-2xl border-b border-border/50 shadow-xl px-6 py-4 mt-4">
      <div className="flex items-center justify-between">
        {/* Logo */}
        <MagneticButton>
          <a href="#home" className="group">
            <div className="flex items-center gap-3 text-2xl font-bold bg-gradient-to-r from-primary to-neon-blue bg-clip-text text-transparent group-hover:scale-105 transition-all duration-300">
              <div className="w-10 h-10 bg-gradient-to-r from-neon-green to-neon-blue rounded-xl shadow-lg shadow-neon-green/50 p-2">
                <div className="w-full h-full bg-background rounded-lg shadow-inner flex items-center justify-center font-bold text-xs">
                  ADN
                </div>
              </div>
              Portfolio
            </div>
          </a>
        </MagneticButton>

        {/* Desktop Nav */}
        <nav className="hidden md:flex items-center gap-8 text-lg font-medium">
          {navItems.map((item) => (
            <a
              key={item.id}
              href={item.id === 'home' ? '#home' : `#${item.id}`}
              className="group relative text-foreground/80 hover:text-foreground hover:font-semibold transition-all duration-300"
            >
              <span>{item.idLabel} / {item.enLabel}</span>
              <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-neon-green to-neon-blue group-hover:w-full transition-all duration-300 rounded-full" />
            </a>
          ))}
        </nav>

        {/* Right side actions */}
        <div className="flex items-center gap-4">
          <Button 
            variant="ghost" 
            size="sm" 
            className="md:hidden p-2 hover:bg-accent/50 rounded-lg transition-colors"
            onClick={toggleMenu}
          >
            <Menu className="h-5 w-5" />
          </Button>
          
          <Button 
            variant="ghost" 
            size="sm"
            className="gap-2 border-none bg-background/50 hover:bg-neon-green/10 p-2 rounded-xl shadow-md hover:shadow-neon-green/30 transition-all duration-300 group"
            onClick={() => setTheme(theme === 'light' ? 'dark' : 'light')}
          >
            {toggledTheme === 'dark' ? (
              <Sun className="h-4 w-4 group-hover:animate-spin transition-all duration-500" />
            ) : (
              <Moon className="h-4 w-4" />
            )}
          </Button>

          <Button 
            variant="ghost" 
            size="sm" 
            className="gap-2 p-2 rounded-xl bg-background/50 hover:bg-accent/50 shadow-md hover:shadow-neon-blue/30 transition-all duration-300"
          >
            <Languages className="h-4 w-4" />
            <span className="hidden md:inline text-sm font-medium">ID/EN</span>
          </Button>

          <MagneticButton>
            <a 
              href="https://github.com" 
              target="_blank" 
              rel="noopener noreferrer" 
              className="p-3 rounded-xl bg-background/50 hover:bg-accent/80 shadow-lg hover:shadow-neon-green/30 transition-all duration-300 hover:scale-110"
              aria-label="GitHub"
            >
              <Github className="h-5 w-5" />
            </a>
          </MagneticButton>
        </div>
      </div>

      {/* Mobile Menu */}
      {isOpen && (
        <div className="md:hidden mt-4 pt-4 border-t border-border/50 animate-in slide-in-from-top-4 duration-300">
          <nav className="flex flex-col gap-4 text-lg font-medium">
            {navItems.map((item) => (
              <button 
                key={item.id}
                onClick={() => {
                  toggleMenu()
                const target = item.id === 'home' ? document.body : document.querySelector(`#${item.id}`)
                target?.scrollIntoView({ behavior: 'smooth' })

                }}
                className="py-3 hover:text-neon-green transition-all duration-300 text-left font-semibold rounded-lg hover:bg-accent/50 px-4"
              >
                {item.idLabel} / {item.enLabel}
              </button>
            ))}
          </nav>
        </div>
      )}
    </header>
  )
}
