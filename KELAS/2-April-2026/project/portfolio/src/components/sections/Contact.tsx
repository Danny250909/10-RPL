import { motion } from 'framer-motion'
import { useForm } from 'react-hook-form'
import { zodResolver } from '@hookform/resolvers/zod'
import { z } from 'zod'
import { Button } from '@/components/ui/Button'
import { GlassCard } from '@/components/ui/GlassCard'
import { MagneticButton } from '@/components/ui/MagneticButton'
import { useState, useRef } from 'react'
import { Github, Linkedin, Mail, MapPin, Send, CheckCircle } from 'lucide-react'
import { cn } from '@/lib/utils'
import { AnimatePresence } from 'framer-motion'

// Form Schema
const contactSchema = z.object({
  name: z.string().min(2, "Name must be at least 2 characters").max(50),
  email: z.string().email("Invalid email address"),
  subject: z.string().min(2, "Subject is required"),
  message: z.string().min(10, "Message must be at least 10 characters").max(500)
})

type ContactFormData = z.infer<typeof contactSchema>

export function Contact() {
  const ref = useRef(null)
  const [isSubmitting, setIsSubmitting] = useState(false)
  const [submitStatus, setSubmitStatus] = useState<'idle' | 'success' | 'error'>('idle')

  const { register, handleSubmit, formState: { errors }, reset, watch } = useForm<ContactFormData>({
    resolver: zodResolver(contactSchema)
  })

  const watchMessage = watch('message')

  const onSubmit = async (_data: ContactFormData) => {
    setIsSubmitting(true)
    setSubmitStatus('idle')

    // Simulate submission
    setTimeout(() => {
      setSubmitStatus('success')
      reset()
      setIsSubmitting(false)
    }, 1500)
  }

  const socials = [
    { name: 'Github', href: '#', icon: Github, color: 'neon-green' },
    { name: 'LinkedIn', href: '#', icon: Linkedin, color: 'neon-blue' },
    { name: 'Email', href: 'mailto:hello@example.com', icon: Mail, color: 'neon-purple' }
  ]

  return (
    <section ref={ref} id="contact" className="py-32 relative overflow-hidden min-h-screen flex items-center">
      <div className="absolute inset-0 bg-gradient-to-br from-background/50 via-transparent to-primary/10" />
      
      <div className="container mx-auto px-6 relative z-10 max-w-6xl">
        <motion.div 
          className="text-center mb-24"
          initial={{ opacity: 0, y: 40 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
        >
          <motion.span 
            className="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-neon-green to-primary text-background rounded-full text-lg font-bold shadow-lg mb-8"
            whileHover={{ scale: 1.05 }}
          >
            <Send className="h-5 w-5" />
            Get In Touch
          </motion.span>
          <motion.h2 
            className="text-5xl md:text-7xl font-black bg-gradient-to-r from-foreground via-primary to-neon-green bg-clip-text text-transparent"
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            Let's Work Together
          </motion.h2>
          <motion.p 
            className="text-xl md:text-2xl text-muted-foreground mt-8 max-w-2xl mx-auto leading-relaxed"
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.4 }}
          >
            Have a project in mind? Send me a message and let's create something amazing together.
          </motion.p>
        </motion.div>

        <div className="grid lg:grid-cols-2 gap-12 items-center">
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.5 }}
          >
            <GlassCard className="p-12">
              <form onSubmit={handleSubmit(onSubmit)} className="space-y-8">
                <div className="space-y-6">
                  <motion.div 
                    className="relative group"
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ delay: 0.6 }}
                  >
                    <input
                      {...register('name')}
                      placeholder=" "
                      className={cn(
                        "w-full px-5 py-4 bg-glass/50 backdrop-blur-sm rounded-2xl border-2 border-border/50 text-foreground placeholder-transparent focus:border-neon-green focus:outline-none focus:ring-4 focus:ring-neon-green/20 peer transition-all duration-300 h-16 text-lg",
                        errors.name && "border-destructive focus:border-destructive focus:ring-destructive/20"
                      )}
                    />
                    <label 
                      className={cn(
                        "absolute left-5 top-4 text-muted-foreground text-lg transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-xs peer-focus:text-neon-green peer-valid:-top-3 peer-valid:text-xs peer-valid:text-neon-green px-2 bg-background rounded-full"
                      )}
                    >
                      Your Name
                    </label>
                    {errors.name && (
                      <p className="text-destructive text-sm mt-1">{errors.name.message}</p>
                    )}
                  </motion.div>

                  <motion.div 
                    className="grid md:grid-cols-2 gap-6"
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ delay: 0.7 }}
                  >
                    <div className="relative group">
                      <input
                        {...register('email')}
                        placeholder=" "
                        type="email"
                        className={cn(
                          "w-full px-5 py-4 h-16 rounded-2xl bg-glass/50 backdrop-blur-sm border-2 border-border/50 text-foreground placeholder-transparent focus:border-neon-green focus:outline-none focus:ring-4 focus:ring-neon-green/20 peer transition-all duration-300 text-lg",
                          errors.email && "border-destructive focus:border-destructive focus:ring-destructive/20"
                        )}
                      />
                      <label className="absolute left-5 top-4 text-muted-foreground text-lg transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-xs peer-focus:text-neon-green peer-valid:-top-3 peer-valid:text-xs peer-valid:text-neon-green px-2 bg-background rounded-full">
                        Email Address
                      </label>
                      {errors.email && (
                        <p className="text-destructive text-sm mt-1">{errors.email.message}</p>
                      )}
                    </div>

                    <div className="relative group">
                      <input
                        {...register('subject')}
                        placeholder=" "
                        className={cn(
                          "w-full px-5 py-4 h-16 rounded-2xl bg-glass/50 backdrop-blur-sm border-2 border-border/50 text-foreground placeholder-transparent focus:border-neon-green focus:outline-none focus:ring-4 focus:ring-neon-green/20 peer transition-all duration-300 text-lg",
                          errors.subject && "border-destructive focus:border-destructive focus:ring-destructive/20"
                        )}
                      />
                      <label className="absolute left-5 top-4 text-muted-foreground text-lg transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-xs peer-focus:text-neon-green peer-valid:-top-3 peer-valid:text-xs peer-valid:text-neon-green px-2 bg-background rounded-full">
                        Subject
                      </label>
                      {errors.subject && (
                        <p className="text-destructive text-sm mt-1">{errors.subject.message}</p>
                      )}
                    </div>
                  </motion.div>

                  <motion.div 
                    className="relative group"
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ delay: 0.8 }}
                  >
                    <textarea
                      {...register('message')}
                      placeholder=" "
                      rows={6}
                      className={cn(
                        "w-full px-5 py-4 rounded-2xl bg-glass/50 backdrop-blur-sm border-2 border-border/50 text-foreground placeholder-transparent focus:border-neon-green focus:outline-none focus:ring-4 focus:ring-neon-green/20 peer resize-none transition-all duration-300 text-lg leading-relaxed",
                        errors.message && "border-destructive focus:border-destructive focus:ring-destructive/20"
                      )}
                    />
                    <label className="absolute left-5 top-4 text-muted-foreground text-lg transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-3 peer-focus:text-sm peer-focus:text-neon-green peer-valid:-top-3 peer-valid:text-sm peer-valid:text-neon-green px-2 bg-background rounded-full">
                      Your Message
                    </label>
                    {errors.message && (
                      <p className="text-destructive text-sm mt-1">{errors.message.message}</p>
                    )}
                    <p className="text-xs text-muted-foreground mt-1">
                      {watchMessage?.length || 0}/500
                    </p>
                  </motion.div>
                </div>

                <MagneticButton>
                  <Button 
                    type="submit" 
                    className="w-full h-16 text-xl font-bold rounded-2xl shadow-2xl hover:shadow-neon-green/50 transition-all duration-300 bg-gradient-to-r from-neon-green to-primary text-background hover:from-primary hover:to-neon-green"
                    disabled={isSubmitting}
                  >
                    {isSubmitting ? (
                      <>
                        <div className="w-6 h-6 border-2 border-background/30 border-t-background rounded-full animate-spin mr-3" />
                        Sending...
                      </>
                    ) : (
                      <>
                        <Send className="h-6 w-6 mr-3" />
                        Send Message
                      </>
                    )}
                  </Button>
                </MagneticButton>
              </form>

              <AnimatePresence mode="wait">
                {submitStatus === 'success' && (
                  <motion.div 
                    className="mt-8 p-6 bg-green-500/20 border border-green-500/50 rounded-2xl backdrop-blur-sm text-center"
                    initial={{ opacity: 0, scale: 0.95 }}
                    animate={{ opacity: 1, scale: 1 }}
                    exit={{ opacity: 0, scale: 0.95 }}
                    transition={{ duration: 0.3 }}
                  >
                    <CheckCircle className="w-16 h-16 text-green-400 mx-auto mb-4" />
                    <h3 className="text-2xl font-bold text-green-400 mb-2">Message Sent!</h3>
                    <p className="text-green-300">Thanks for reaching out! I'll get back to you within 24 hours.</p>
                  </motion.div>
                )}
              </AnimatePresence>
            </GlassCard>
          </motion.div>

          <motion.div
            className="space-y-8 lg:space-y-0 lg:flex lg:flex-col lg:justify-center"
            initial={{ opacity: 0, x: 50 }}
            animate={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.8, delay: 0.5 }}
          >
            <GlassCard className="p-12 lg:max-w-md">
              <h3 className="text-3xl font-bold bg-gradient-to-r from-primary to-neon-blue bg-clip-text text-transparent mb-12 text-center">
                Or Connect Directly
              </h3>
              <div className="space-y-6">
                <MagneticButton strength={0.1}>
                  <a href="mailto:hello@example.com" className="group flex items-center gap-4 p-6 rounded-3xl bg-gradient-to-r from-neon-green/10 to-primary/10 border border-neon-green/30 hover:shadow-neon-green/50 transition-all duration-500 hover:scale-105">
                    <div className="w-16 h-16 bg-neon-green rounded-2xl flex items-center justify-center shadow-lg group-hover:shadow-neon-green/75 group-hover:rotate-12 transition-all">
                      <Mail className="w-8 h-8 text-background font-bold" />
                    </div>
                    <div>
                      <p className="text-sm text-muted-foreground uppercase tracking-wide font-semibold">Email</p>
                      <p className="text-xl font-bold text-foreground">hello@example.com</p>
                    </div>
                  </a>
                </MagneticButton>

                <div className="flex flex-wrap gap-4 pt-4 justify-center">
                  {socials.map((social) => (
                    <MagneticButton key={social.name} strength={0.15}>
                      <a 
                        href={social.href}
                        target="_blank"
                        rel="noopener noreferrer"
                        className={cn(
                          "w-20 h-20 rounded-2xl flex items-center justify-center shadow-xl backdrop-blur-md border-2 transition-all duration-500 hover:scale-125 hover:-rotate-12 group",
                          `border-${social.color} bg-${social.color}/10 hover:bg-${social.color}/20 hover:shadow-${social.color}/50`
                        )}
                      >
                        <social.icon className="w-8 h-8 text-foreground group-hover:text-background transition-colors" />
                      </a>
                    </MagneticButton>
                  ))}
                </div>
              </div>
            </GlassCard>

            <motion.div
              initial={{ opacity: 0, scale: 0.9 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 1 }}
            >
              <GlassCard className="p-8 text-center">
                <MapPin className="w-16 h-16 mx-auto mb-6 text-muted-foreground opacity-75" />
                <h4 className="text-2xl font-bold text-foreground mb-4">Based in Indonesia</h4>
                <p className="text-muted-foreground">
                  Working remotely with clients worldwide
                </p>
              </GlassCard>
            </motion.div>
          </motion.div>
        </div>
      </div>
    </section>
  )
}
