import { useEffect, useState, useCallback, useRef } from 'react'

interface UseTypewriterOptions {
  loop?: boolean
  typeSpeed?: number
  eraseSpeed?: number
  pauseLength?: number
}

export function useTypewriter(
  words: string[],
  options: UseTypewriterOptions = {
    loop: true,
    typeSpeed: 100,
    eraseSpeed: 50,
    pauseLength: 2000
  }
) {
  const [text, setText] = useState('')
  const [wordIndex, setWordIndex] = useState(0)
  const [isDeleting, setIsDeleting] = useState(false)
  const timeoutRef = useRef<number>()

  const tick = useCallback(() => {
    const fullWord = words[wordIndex]
    if (!fullWord) return

    const speed = isDeleting ? options.eraseSpeed : options.typeSpeed

    timeoutRef.current = setTimeout(() => {
      setText(prev => {
        if (isDeleting) {
          return prev.slice(0, -1)
        }
        return fullWord.slice(0, prev.length + 1)
      })
    }, speed) as unknown as number
  }, [wordIndex, isDeleting, options.eraseSpeed, options.typeSpeed, words])

  useEffect(() => {
    if (!timeoutRef.current) {
      tick()
    }
  }, [tick])

  useEffect(() => {
    if (isDeleting && (text === '' || text.length === 0)) {
      setIsDeleting(false)
      setWordIndex(prev => options.loop ? (prev + 1) % words.length : prev)
      timeoutRef.current = setTimeout(tick, options.pauseLength) as unknown as number
    } else if (!isDeleting && text === words[wordIndex]) {
      timeoutRef.current = setTimeout(() => setIsDeleting(true), options.pauseLength) as unknown as number
    }

    return () => {
      if (timeoutRef.current) {
        clearTimeout(timeoutRef.current)
      }
    }
  }, [text, isDeleting, wordIndex, words, options.loop, options.pauseLength, tick])

  return text
}

