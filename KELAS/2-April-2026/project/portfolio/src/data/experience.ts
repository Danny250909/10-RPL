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
    title: 'Senior Frontend Developer',
    company: 'TechCorp',
    duration: '2022 - Present',
    description: [
      'Led development of 5+ production applications',
      'Improved performance by 40% through optimization',
      'Mentored junior developers on React patterns'
    ]
  },
  {
    id: '2',
    title: 'Frontend Developer',
    company: 'StartupXYZ',
    duration: '2020 - 2022',
    description: [
      'Built responsive web apps for 100k+ users',
      'Integrated 3rd party APIs and services',
      'Collaborated with design team on UI/UX'
    ]
  }
]

