// Custom JavaScript for DevPortfolio

document.addEventListener("DOMContentLoaded", () => {
  // Initialize Bootstrap tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl))

  // Add animation classes to elements when they come into view
  const animateElements = document.querySelectorAll(".animate-on-scroll")

  if (animateElements.length > 0) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate-fade-in")
            observer.unobserve(entry.target)
          }
        })
      },
      { threshold: 0.1 },
    )

    animateElements.forEach((element) => {
      observer.observe(element)
    })
  }

  // Mobile menu toggle
  const navbarToggler = document.querySelector(".navbar-toggler")
  if (navbarToggler) {
    navbarToggler.addEventListener("click", () => {
      document.body.classList.toggle("menu-open")
    })
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()

      const targetId = this.getAttribute("href")
      if (targetId === "#") return

      const targetElement = document.querySelector(targetId)
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: "smooth",
        })
      }
    })
  })
})
