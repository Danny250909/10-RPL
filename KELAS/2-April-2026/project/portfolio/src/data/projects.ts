export interface Project {
  id: string
  title: string
  description: string
  image: string
  tags: string[]
  category: 'web' | 'mobile' | 'uiux'
  github: string
  live: string
  featured: boolean
}

export const projects: Project[] = [
  {
    id: '1',
    title: 'E-Commerce Platform',
    description: 'Fullstack e-commerce app with payment integration and admin dashboard',
    image: '/projects/ecommerce.png',
    tags: ['React', 'Node.js', 'Stripe', 'Tailwind'],
    category: 'web',
    github: 'https://github.com/username/ecommerce',
    live: 'https://ecommerce.example.com',
    featured: true
  },
  {
    id: '2',
    title: 'Task Management App',
    description: 'Modern task manager with real-time collaboration and drag & drop',
    image: '/projects/tasks.png',
    tags: ['Next.js', 'Supabase', 'Framer Motion'],
    category: 'web',
    github: 'https://github.com/username/tasks',
    live: 'https://tasks.example.com',
    featured: true
  },
  {
    id: '3',
    title: 'Portfolio Website',
    description: 'This very portfolio you are viewing right now!',
    image: '/projects/portfolio.png',
    tags: ['React', 'Vite', 'Tailwind', 'Three.js'],
    category: 'web',
    github: 'https://github.com/username/portfolio',
    live: '/',
    featured: true
  },
  {
    id: '4',
    title: 'Weather Dashboard',
    description: 'Real-time weather app with beautiful animations and forecasts',
    image: '/projects/weather.png',
    tags: ['React', 'OpenWeatherAPI', 'Chart.js'],
    category: 'web',
    github: 'https://github.com/username/weather',
    live: 'https://weather.example.com',
    featured: false
  },
  {
    id: '5',
    title: 'Mobile Banking App',
    description: 'Financial app concept with smooth animations and secure auth',
    image: '/projects/banking.png',
    tags: ['React Native', 'Expo', 'Stripe'],
    category: 'mobile',
    github: 'https://github.com/username/banking',
    live: 'https://banking.example.com',
    featured: false
  },
  {
    id: '6',
    title: 'Landing Page Collection',
    description: '20+ responsive landing pages with modern design trends',
    image: '/projects/landings.png',
    tags: ['HTML', 'Tailwind', 'GSAP'],
    category: 'uiux',
    github: 'https://github.com/username/landings',
    live: 'https://landings.example.com',
    featured: false
  }
]

