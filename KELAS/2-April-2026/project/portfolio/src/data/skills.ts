export interface Skill {
  name: string
  level: number // 0-100
  category: string
  icon: string // lucide icon name
}

export const skills: Skill[] = [
  {
    name: 'React',
    level: 95,
    category: 'Frontend',
    icon: 'react'
  },
  {
    name: 'TypeScript',
    level: 90,
    category: 'Languages',
    icon: 'file-code'
  },
  {
    name: 'Tailwind CSS',
    level: 92,
    category: 'Styling',
    icon: 'tailwind'
  },
  {
    name: 'Node.js',
    level: 85,
    category: 'Backend',
    icon: 'nodejs'
  },
  {
    name: 'Three.js',
    level: 80,
    category: '3D',
    icon: 'cube'
  },
  {
    name: 'Framer Motion',
    level: 88,
    category: 'Animation',
    icon: 'animation'
  },
  {
    name: 'Next.js',
    level: 87,
    category: 'Framework',
    icon: 'nextjs'
  }
]

