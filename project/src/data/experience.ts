export interface Experience {
  id: string
  title: string
  company: string
  duration: string
  description: string[]
}

export const experience: Experience[] = [
  {
    id: '1',
    title: 'RPL Student',
    company: 'SMKN 2 Buduran',
    duration: '2025 - 2028',
    description: [
      'Mempelajari Rekayasa Perangkat Lunak (RPL)',
      'Web Development dengan HTML, CSS, JavaScript, PHP',
      'Mengerjakan proyek kelas dan miniprojek JavaScript'
    ]
  },
  {
    id: '2',
    title: 'Web Developer Practice',
    company: 'Personal Projects',
    duration: '2024 - Present',
    description: [
      'Membuat Movie App dengan React',
      'Mengembangkan Portfolio dengan Vite + Tailwind',
      'Latihan Bootstrap dan integrasi database'
    ]
  }
]

