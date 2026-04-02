import { useState, useRef } from 'react'
import { motion } from 'framer-motion'
import { Button } from '@/components/ui/Button'
import { GlassCard } from '@/components/ui/GlassCard'
// import { Badge } from '@/components/ui/Badge'
import { projects } from '@/data/projects'
import { useIntersectionObserver } from '@/hooks/useIntersectionObserver'
import { MagneticButton } from '@/components/ui/MagneticButton'
// import { cn } from '@/lib/utils' // Not used everywhere
import { Github, ExternalLink, Filter, Eye } from 'lucide-react'

interface Project {
  id: string
  title: string
  description: string
  image: string
  tags: string[]
  category: 'web' | 'mobile' | 'uiux' | 'all'
  github: string
  live: string
  featured: boolean
}

const categories = ['all', 'web', 'mobile', 'uiux'] as const
type Category = typeof categories[number]

function Badge({ children }: { children: React.ReactNode }) {
  return (
    <motion.span 
      className="px-3 py-1 bg-primary/20 text-primary text-xs font-semibold rounded-full border border-primary/30 uppercase tracking-wide animate-pulse"
      whileHover={{ scale: 1.05 }}
    >
      {children}
    </motion.span>
  )
}

export function Projects() {
  const ref = useRef(null)
  const isInView = useIntersectionObserver(ref, { threshold: 0.1 })
  const [selectedCategory, setSelectedCategory] = useState<Category>('all')
// const [filterActive, setFilterActive] = useState(false) // Unused

  const filteredProjects = projects.filter(project => 
    selectedCategory === 'all' || project.category === selectedCategory
  )

  const featuredProjects = filteredProjects.filter(p => p.featured).slice(0, 3)
  const regularProjects = filteredProjects.filter(p => !p.featured)

  return (
    <section ref={ref} id="projects" className="py-32 bg-gradient-to-b from-background to-muted/10">
      <div className="container mx-auto px-6">
        {/* Header */}
        <motion.div 
          className="text-center mb-24"
          initial={{ opacity: 0, y: 40 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.8 }}
        >
          <motion.span 
            className="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-neon-green to-primary text-white rounded-full text-lg font-bold shadow-neon-green mb-8"
            whileHover={{ scale: 1.05, boxShadow: '0 20px 40px rgba(34, 197, 94, 0.4)' }}
          >
            <Filter className="h-5 w-5" />
            Latest Works
          </motion.span>
          <motion.h2 
            className="text-5xl md:text-7xl font-black bg-gradient-to-r from-foreground via-primary to-neon-blue bg-clip-text text-transparent leading-tight"
            initial={{ opacity: 0 }}
            animate={isInView ? { opacity: 1 } : {}}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            Creative Portfolio
          </motion.h2>
          <motion.p 
            className="text-xl md:text-2xl text-muted-foreground mt-8 max-w-2xl mx-auto"
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.4 }}
          >
            Showcasing my best work with cutting-edge technologies and modern design
          </motion.p>
        </motion.div>

        {/* Filter Buttons */}
        <motion.div 
          className="flex flex-wrap gap-3 justify-center mb-20"
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.5 }}
        >
          {categories.map((category) => (
            <Button
              key={category}
              variant={selectedCategory === category ? "neon" : "outline"}
  className={`px-6 py-3 font-bold rounded-xl transition-all duration-300 hover:shadow-neon-green/50 ${selectedCategory === category ? 'shadow-neon-green scale-105 animate-pulse ring-2 ring-neon-green ring-offset-2' : ''}`}
              onClick={() => {
                setSelectedCategory(category)
                // setFilterActive(true)
              }}
            >
              {category.toUpperCase()}
            </Button>
          ))}
        </motion.div>

        {/* Featured Projects */}
        <motion.div 
          className="mb-24"
          initial="hidden"
          animate={isInView ? "visible" : "hidden"}
          variants={{
            visible: {
              transition: {
                staggerChildren: 0.15,
                delayChildren: 0.3
              }
            }
          }}
        >
          <h3 className="text-3xl font-bold text-center mb-16 bg-gradient-to-r from-primary to-neon-blue bg-clip-text text-transparent">
            Featured Projects
          </h3>
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {featuredProjects.map((project, index) => (
              <motion.div 
                key={project.id}
                variants={{
                  hidden: { opacity: 0, y: 50, scale: 0.95 },
                  visible: { opacity: 1, y: 0, scale: 1 }
                }}
              >
                <ProjectCard project={project} index={index} />
              </motion.div>
            ))}
          </div>
        </motion.div>

        {/* Regular Projects - Masonry Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
          {regularProjects.map((project, index) => (
            <motion.div 
              key={project.id}
              initial={{ opacity: 0, scale: 0.9 }}
              whileInView={{ opacity: 1, scale: 1 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: index * 0.05 }}
            >
              <ProjectCard project={project} index={index} />
            </motion.div>
          ))}
        </div>

        {/* CTA */}
        <motion.div 
          className="text-center mt-32"
          initial={{ opacity: 0, y: 40 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
        >
          <GlassCard className="max-w-md mx-auto p-12">
            <Eye className="w-20 h-20 mx-auto text-muted-foreground mb-6 opacity-50 animate-bounce" />
            <h3 className="text-2xl font-bold text-foreground mb-4">
              Like What You See?
            </h3>
            <p className="text-muted-foreground mb-8">
              Get in touch to discuss your next project
            </p>
            <MagneticButton>
              <Button className="neon w-full px-12 py-8 text-lg font-bold">
                Let's Talk Projects
              </Button>
            </MagneticButton>
          </GlassCard>
        </motion.div>
      </div>
    </section>
  )
}

function ProjectCard({ project, index }: { project: Project, index: number }) {
  return (
    <motion.div
      initial={{ opacity: 0, rotateX: -20 }}
      animate={{ opacity: 1, rotateX: 0 }}
      transition={{ duration: 0.6, delay: index * 0.05 }}
      whileHover={{ y: -10, rotateX: 5 }}
      className="group"
    >
      <GlassCard 
        className="h-full overflow-hidden group-hover:shadow-2xl transition-all duration-500 cursor-pointer relative"
        hoverScale={false}
      >
        <div className="relative h-64 overflow-hidden rounded-t-2xl group">
          <img 
            src={project.image} 
            alt={project.title}
            className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 group-hover:rotate-2"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-6">
            <div className="space-y-3">
              <div className="flex flex-wrap gap-2">
              {project.tags.slice(0, 3).map(tag => (
                  <Badge key={tag}>{tag}</Badge>
                ))}
              </div>
              <div className="flex gap-3 pt-2">
                <MagneticButton strength={0.05}>
                  <a href={project.github} target="_blank" rel="noopener noreferrer" className="p-3 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 transition-all group-hover:shadow-neon-green">
                    <Github className="h-5 w-5" />
                  </a>
                </MagneticButton>
                <MagneticButton strength={0.05}>
                  <a href={project.live} target="_blank" rel="noopener noreferrer" className="p-3 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 hover:bg-white/30 flex items-center gap-2 transition-all group-hover:shadow-neon-blue">
                    <ExternalLink className="h-5 w-5" />
                    Live Demo
                  </a>
                </MagneticButton>
              </div>
            </div>
          </div>
        </div>
        
        <div className="p-8">
          <h3 className="text-xl font-bold text-foreground mb-3 group-hover:text-neon-green transition-colors">{project.title}</h3>
          <p className="text-muted-foreground leading-relaxed line-clamp-3 mb-6">{project.description}</p>
          <div className="flex items-center justify-between">
            <div className="flex gap-2">
                {project.tags.map(tag => (
                  <span key={tag} className="text-xs px-2 py-1 bg-primary/20 text-primary rounded-full text-xs font-semibold border border-primary/30">{tag}</span>
                ))}
            </div>
            <Button variant="ghost" size="sm" className="gap-2 p-2 rounded-xl hover:bg-neon-green/20">
              <Eye className="h-4 w-4" />
            </Button>
          </div>
        </div>
      </GlassCard>
    </motion.div>
  )
}

