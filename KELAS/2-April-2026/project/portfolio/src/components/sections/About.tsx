import { motion } from 'framer-motion'
import { Card, CardContent, CardHeader, CardFooter } from '@/components/ui/Card'
import { ProgressBar } from '@/components/ui/ProgressBar'
import { GlassCard } from '@/components/ui/GlassCard'
import { Button } from '@/components/ui/Button'
import { useIntersectionObserver } from '@/hooks/useIntersectionObserver'
import { skills } from '@/data/skills'
import { experience as expData } from '@/data/experience'
import { useRef } from 'react'
import { User, Briefcase, Code, Layers } from 'lucide-react'
import { MagneticButton } from '@/components/ui/MagneticButton'
import { cn } from '@/lib/utils'

const stats = [
  { value: 50, label: 'Projects Completed', icon: Code, suffix: '+' },
  { value: 20, label: 'Happy Clients', icon: User, suffix: '+' },
  { value: 5000, label: 'Hours of Work', icon: Code, suffix: '+' },
  { value: 25, label: 'Technologies', icon: Layers, suffix: '+' }
]

export function About() {
  const ref = useRef<HTMLDivElement>(null)
  const isInView = useIntersectionObserver(ref, { threshold: 0.1 })

  return (
    <section ref={ref} id="about" className="py-32 bg-background/50 relative overflow-hidden">
      <div className="absolute inset-0 bg-gradient-to-br from-background/20 via-transparent to-accent/10 pointer-events-none" />
      
      <div className="container mx-auto px-6 relative z-10">
        {/* Header */}
        <motion.div 
          className="text-center mb-24 max-w-3xl mx-auto"
          initial={{ opacity: 0, y: 40 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.8 }}
        >
          <motion.span 
            className="inline-flex items-center gap-2 px-4 py-2 bg-primary/10 rounded-full text-primary text-sm font-semibold mb-6"
            initial={{ scale: 0 }}
            animate={{ scale: 1 }}
            transition={{ delay: 0.2, type: "spring" }}
          >
            <User className="h-4 w-4" />
            About Me
          </motion.span>
          <motion.h2 
            className="text-5xl md:text-7xl font-black bg-gradient-to-r from-foreground to-muted-foreground/50 bg-clip-text text-transparent drop-shadow-lg"
            initial={{ opacity: 0 }}
            animate={isInView ? { opacity: 1 } : {}}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            A Passionate{' '}
            <span className="bg-gradient-to-r from-neon-green to-neon-blue bg-clip-text text-transparent drop-shadow-2xl">
              Creative Developer
            </span>
          </motion.h2>
          <motion.p 
            className="text-xl md:text-2xl text-muted-foreground mt-8 max-w-2xl mx-auto leading-relaxed"
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.4 }}
          >
            Crafting beautiful digital experiences with code. I blend design thinking with modern web technologies to create immersive user experiences.
          </motion.p>
        </motion.div>

        {/* Stats */}
        <motion.div 
          className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-24"
          initial="hidden"
          animate={isInView ? "visible" : "hidden"}
          variants={{
            visible: {
              transition: {
                staggerChildren: 0.2,
                delayChildren: 0.4
              }
            }
          }}
        >
          {stats.map((stat, index) => (
            <motion.div 
              key={index}
              variants={{
                hidden: { opacity: 0, y: 50 },
                visible: { opacity: 1, y: 0 }
              }}
              className={cn("glass p-8 rounded-3xl text-center hover:scale-[1.02] hover:shadow-2xl hover:shadow-neon-green/30 transition-all duration-500 group cursor-pointer")}
            >
              <div className="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl flex items-center justify-center group-hover:rotate-12 group-hover:scale-110 transition-all duration-500 shadow-xl">
                <stat.icon className="h-8 w-8 text-primary opacity-80" />
              </div>
              <motion.div 
                className="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-neon-green to-neon-blue mb-4 drop-shadow-lg"
                key={`stat-${index}`}
                initial={{ scale: 0.8 }}
                animate={{ scale: 1 }}
                transition={{ type: "spring", stiffness: 300 }}
              >
                {stat.value.toLocaleString()}
                {stat.suffix}
              </motion.div>
              <p className="text-muted-foreground font-semibold text-lg leading-tight">{stat.label}</p>
            </motion.div>
          ))}
        </motion.div>

        {/* Skills & Experience */}
        <div className="grid lg:grid-cols-2 gap-12 mb-24">
          {/* Skills */}
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.6 }}
          >
            <Card className="glass border-0 shadow-2xl overflow-hidden hover:shadow-3xl hover:shadow-neon-green/20 transition-all duration-500">
              <CardHeader className="pb-8">
                <h3 className="text-3xl font-bold bg-gradient-to-r from-primary to-neon-blue bg-clip-text text-transparent flex items-center gap-3 mb-4 drop-shadow-lg">
                  <Layers className="h-10 w-10 flex-shrink-0 opacity-90" />
                  Tech Stack
                </h3>
                <p className="text-muted-foreground text-lg leading-relaxed">
                  Technologies I'm currently working with and passionate about
                </p>
              </CardHeader>
              <CardContent className="space-y-6">
                {skills.map((skill, index) => (
                  <motion.div 
                    key={skill.name}
                    initial={{ opacity: 0, y: 20 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ duration: 0.5, delay: 0.8 + index * 0.1 }}
                  >
                    <div className="flex items-center justify-between mb-4">
                      <div className="flex items-center gap-4">
                        <div className="w-12 h-12 bg-gradient-to-br from-muted to-muted-foreground/10 rounded-2xl flex items-center justify-center shadow-lg hover:shadow-neon-blue/30 transition-all">
                          <span className="text-lg font-semibold">{skill.icon}</span>
                        </div>
                        <div>
                          <h4 className="font-semibold text-xl text-foreground leading-tight">{skill.name}</h4>
                          <p className="text-sm text-muted-foreground font-medium capitalize">{skill.category}</p>
                        </div>
                      </div>
                      <span className="text-sm font-mono text-muted-foreground font-bold min-w-[4rem] text-right">
                        {skill.level}%
                      </span>
                    </div>
                    <ProgressBar value={skill.level} />
                  </motion.div>
                ))}
              </CardContent>
            </Card>
          </motion.div>

          {/* Experience Timeline */}
          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.6 }}
          >
            <Card className="glass border-0 shadow-2xl h-full hover:shadow-3xl hover:shadow-neon-purple/20 transition-all duration-500">
              <CardHeader className="pb-8">
                <h3 className="text-3xl font-bold bg-gradient-to-r from-primary to-neon-purple bg-clip-text text-transparent flex items-center gap-3 mb-4 drop-shadow-lg">
                  <Briefcase className="h-10 w-10 flex-shrink-0 opacity-90" />
                  Experience
                </h3>
                <p className="text-muted-foreground text-lg leading-relaxed">
                  My journey in creating digital magic
                </p>
              </CardHeader>
              <CardContent className="space-y-8">
                {expData.map((exp, index) => (
                  <motion.div 
                    key={exp.id}
                    className="group relative pb-8 last:pb-0"
                    initial={{ opacity: 0, scale: 0.95 }}
                    animate={isInView ? { opacity: 1, scale: 1 } : {}}
                    transition={{ duration: 0.6, delay: 1 + index * 0.15 }}
                  >
                    <div className="flex items-start gap-6 group-hover:translate-x-2 transition-all duration-500">
                      <div className="flex flex-col items-center w-20 flex-shrink-0 pt-2">
                        <div className="w-6 h-6 bg-neon-purple rounded-full shadow-neon-purple/50 animate-pulse group-hover:animate-spin" />
                        <div className="w-px h-24 bg-gradient-to-b from-neon-purple to-transparent mt-3 opacity-50" />
                      </div>
                      <div className="flex-1">
                        <div className="flex items-center gap-4 mb-3">
                          <span className="px-3 py-1 bg-primary/20 text-primary rounded-full text-xs font-semibold uppercase tracking-wide">
                            {exp.duration}
                          </span>
                          <div>
                            <h4 className="font-black text-xl leading-tight group-hover:text-neon-purple transition-colors">{exp.title}</h4>
                            <p className="text-muted-foreground font-semibold text-base leading-tight">{exp.company}</p>
                          </div>
                        </div>
                        <ul className="space-y-2 ml-1">
                          {exp.description.map((item, i) => (
                            <motion.li 
                              key={i}
                              className="flex items-start gap-3 text-muted-foreground pl-4 relative before:absolute before:left-0 before:top-2 before:w-1.5 before:h-1.5 before:bg-neon-purple/60 before:rounded-full before:mt-1.5 before:shadow-sm"
                              initial={{ opacity: 0, x: 20 }}
                              animate={isInView ? { opacity: 1, x: 0 } : {}}
                              transition={{ delay: 1.2 + index * 0.1 + i * 0.05 }}
                            >
                              <span className="w-1.5 h-1.5 bg-neon-purple/50 rounded-full mt-2.5 flex-shrink-0 shadow-sm" />
                              {item}
                            </motion.li>
                          ))}
                        </ul>
                      </div>
                    </div>
                  </motion.div>
                ))}
              </CardContent>
              <CardFooter className="pt-0 border-t-0">
                <MagneticButton className="w-full">
                  <Button className="w-full bg-gradient-to-r from-neon-green to-neon-blue hover:from-neon-blue hover:to-purple-500 shadow-lg hover:shadow-neon-green/50 font-bold">
                    View Full Resume
                  </Button>
                </MagneticButton>
              </CardFooter>
            </Card>
          </motion.div>
        </div>

        {/* CTA */}
        <motion.div 
          className="text-center mt-32"
          initial={{ opacity: 0, y: 40 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.8, delay: 1.2 }}
        >
          <GlassCard className="max-w-2xl mx-auto p-12 shadow-2xl hover:shadow-neon-green/20 transition-all duration-500">
            <div className="flex flex-col md:flex-row items-center gap-8">
              <div className="text-left md:text-center flex-1">
                <h3 className="text-2xl md:text-3xl font-bold bg-gradient-to-r from-neon-green to-primary bg-clip-text text-transparent mb-4 drop-shadow-lg">
                  Ready to work together?
                </h3>
                <p className="text-muted-foreground text-lg leading-relaxed">
                  Let's create something extraordinary
                </p>
              </div>
              <MagneticButton className="md:ml-auto flex-shrink-0">
                <Button size="lg" className="px-12 py-8 font-bold text-lg bg-gradient-to-r from-neon-green to-neon-blue hover:from-neon-blue hover:to-purple-500 shadow-2xl hover:shadow-neon-green/50">
                  Start Project
                </Button>
              </MagneticButton>
            </div>
          </GlassCard>
        </motion.div>
      </div>
    </section>
  )
}

