if (document.body.clientWidth <= 600) {
  const accordionItems = document.querySelectorAll('.cas-item__payment-bottom')
  const accordionCasInit = document.querySelector(".cas-item__payment-bottom");
  if (accordionCasInit) {
    if (accordionItems.length > 0) {
      accordionItems.forEach((item) => {
        const accordionHeader = item.querySelector('.cas-item__payment-btn')

        accordionHeader.addEventListener('click', () => {

          const openItem = document.querySelector('.accordion-open')

          toggleItem(item)

          if (openItem && openItem !== item) {
            toggleItem(openItem)
          }
        })
      })
    }
    const toggleItem = (item) => {
      const accordionContent = item.querySelector('.cas-item__payment-list')

      if (item.classList.contains('accordion-open')) {
        accordionContent.removeAttribute('style')
        item.classList.remove('accordion-open')
      } else {
        accordionContent.style.height = accordionContent.scrollHeight + 'px'
        item.classList.add('accordion-open')
      }
    }
  }

}