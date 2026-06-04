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
    title: 'Movie App',
    description: 'Aplikasi React movie dengan integrasi API TMDB, navbar responsif, dan komponen dinamis',
    image: 'https://images.unsplash.com/photo-1526401485004-2fda9f9f3c7f?w=400&h=300&fit=crop',
    tags: ['React', 'JavaScript', 'API', 'Components'],
    category: 'web',
    github: '',
    live: '../5 maret 2026/movie-app/',
    featured: true
  },
  {
    id: '2',
    title: 'Portfolio RPL',
    description: 'Website portfolio modern siswa RPL SMKN 2 Buduran dengan animasi 3D dan bilingual',
    image: 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=400&h=300&fit=crop',
    tags: ['React', 'Vite', 'Tailwind', 'TypeScript'],
    category: 'web',
    github: '',
    live: '/',
    featured: true
  },
  {
    id: '3',
    title: 'Function Learning Projects',
    description: '30+ miniprojek JavaScript functions: declaration, arrow, callback, async, IIFE, dan lainnya',
    image: 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=400&h=300&fit=crop',
    tags: ['JavaScript', 'Functions', 'ES6+', 'Miniprojects'],
    category: 'web',
    github: '',
    live: '../29-Januari-2026/Miniprojek/',
    featured: true
  },
  {
    id: '4',
    title: 'Shopee Clone',
    description: 'E-commerce practice project dengan PHP, Bootstrap, CSS Grid, dan animasi promo',
    image: 'https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?w=400&h=300&fit=crop',
    tags: ['PHP', 'HTML', 'CSS', 'Bootstrap'],
    category: 'web',
    github: '',
    live: '../8 Januari 2026/shopee.html',
    featured: false
  },
  {
    id: '5',
    title: 'Function Module',
    description: 'Modul lengkap JavaScript functions: declaration, expression, arrow, constructor, callback, async',
    image: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=400&h=300&fit=crop',
    tags: ['JavaScript', 'Functions', 'ES6+', 'Module'],
    category: 'web',
    github: '',
    live: '../29-Januari-2026/Modulfunction/',
    featured: false
  },
  {
    id: '6',
    title: 'PHP Projects Collection',
    description: 'Koleksi proyek PHP dari KELAS: login system, CRUD, MySQL, dan OOP',
    image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=300&fit=crop',
    tags: ['PHP', 'MySQL', 'OOP', 'CRUD'],
    category: 'web',
    github: '',
    live: '../20 November 2025/',
    featured: false
  }
]
