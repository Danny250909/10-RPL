import { Hero, About, Projects, Contact } from '@/components/sections'

export function Home() {
  return (
    <main className="pt-24 pb-16">
      <Hero />
      <About />
      <Projects />
      <Contact />
    </main>
  )
}

