export interface Skill {
  name: string
  level: number // 0-100
  category: string
  icon: string // lucide icon name
}

export const skills: Skill[] = [
  {
    name: 'HTML',
    level: 95,
    category: 'Frontend',
    icon: 'html5'
  },
  {
    name: 'CSS',
    level: 92,
    category: 'Frontend',
    icon: 'css3'
  },
  {
    name: 'JavaScript',
    level: 90,
    category: 'Languages',
    icon: 'javascript'
  },
  {
    name: 'PHP',
    level: 85,
    category: 'Backend',
    icon: 'php'
  },
  {
    name: 'React',
    level: 80,
    category: 'Framework',
    icon: 'react'
  },
  {
    name: 'Tailwind CSS',
    level: 85,
    category: 'Styling',
    icon: 'tailwind'
  },
  {
    name: 'MySQL',
    level: 75,
    category: 'Database',
    icon: 'database'
  },
  {
    name: 'Bootstrap',
    level: 82,
    category: 'Styling',
    icon: 'bootstrap'
  }
]

