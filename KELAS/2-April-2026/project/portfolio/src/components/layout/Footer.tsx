import { Button } from '@/components/ui/Button'
import { ArrowUp, Github, Linkedin, Mail } from 'lucide-react'
import { MagneticButton } from '@/components/ui/MagneticButton'
import { cn } from '@/lib/utils'

export function Footer() {
  return (
    <footer className="glass backdrop-blur-md border-t border-border/50 mt-24 pt-16 pb-8">
      <div className="container max-w-7xl mx-auto px-6">
        <div className="grid md:grid-cols-3 gap-12 items-center">
          <div className="text-center md:text-left">
            <h3 className="text-2xl font-bold bg-gradient-to-r from-neon-green to-neon-blue bg-clip-text text-transparent mb-4">
              Let's Create Something Amazing
            </h3>
            <p className="text-muted-foreground max-w-md">
              Ready to bring your vision to life? Let's talk.
            </p>
          </div>

          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <MagneticButton>
              <Button 
                variant="outline" 
                size="lg" 
                className="gap-3 border-border/50 hover:border-neon-green/50 bg-background/50 hover:bg-neon-green/10 shadow-lg hover:shadow-neon-green/30 transition-all duration-300"
              >
                <Mail className="h-5 w-5" />
                Get In Touch
              </Button>
            </MagneticButton>
            <MagneticButton>
              <Button 
                size="lg" 
                className="gap-3 font-bold bg-gradient-to-r from-neon-green via-neon-blue to-purple-500 hover:from-neon-blue hover:to-purple-600 text-background shadow-2xl hover:shadow-neon-green/50 transform hover:-translate-y-1 transition-all duration-300 px-8"
              >
                <ArrowUp className="h-5 w-5 -rotate-45" />
                Download CV
              </Button>
            </MagneticButton>
          </div>

          <div className="flex flex-col gap-6 items-center md:items-end">
            <div className="flex gap-4">
              <MagneticButton>
                <a 
                  href="https://github.com" 
                  target="_blank" 
                  rel="noopener noreferrer" 
                  className="p-3 rounded-xl bg-background/30 hover:bg-neon-green/20 shadow-lg hover:shadow-neon-green/50 transition-all duration-300 group hover:scale-110"
                  aria-label="GitHub"
                >
                  <Github className="h-6 w-6 text-foreground group-hover:text-neon-green transition-colors" />
                </a>
              </MagneticButton>
              <MagneticButton>
                <a 
                  href="https://linkedin.com" 
                  target="_blank" 
                  rel="noopener noreferrer" 
                  className="p-3 rounded-xl bg-background/30 hover:bg-neon-blue/20 shadow-lg hover:shadow-neon-blue/50 transition-all duration-300 group hover:scale-110"
                  aria-label="LinkedIn"
                >
                  <Linkedin className="h-6 w-6 text-foreground group-hover:text-neon-blue transition-colors" />
                </a>
              </MagneticButton>
            </div>
            <Button
              variant="ghost"
              className={cn(
                "p-3 rounded-xl group hover:bg-neon-green/20 border border-border/50 shadow-lg hover:shadow-neon-green/30 transition-all duration-300 h-12 w-12",
                "animate-pulse group-hover:animate-none"
              )}
              onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
            >
              <ArrowUp className="h-5 w-5 group-hover:rotate-180 transition-transform duration-300" />
            </Button>
          </div>
        </div>

        <div className="border-t border-border/30 mt-16 pt-12 text-center text-xs md:text-sm text-muted-foreground">
          © 2024 Portfolio. Made with ❤️ using React + Vite + Tailwind.{' '}
          <a href="https://github.com" className="hover:text-neon-green transition-colors font-medium">
            View Source
          </a>
        </div>
      </div>
    </footer>
  )
}

