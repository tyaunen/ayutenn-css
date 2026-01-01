
window.ayutenn = window.ayutenn || {};

ayutenn.accordion = {
    close(ele){
        ele.style.transition = 'none';
        ele.style.height = ele.scrollHeight + 'px';
        ele.style.maxHeight = ele.scrollHeight + 'px';

        requestAnimationFrame(() => {
            ele.style.transition = 'all 0.3s';
            ele.style.height = "0px";
            ele.style.maxHeight = "";
            ele.classList.remove("open");
        });
    },
    open(ele){
        ele.style.maxHeight = ele.scrollHeight + 'px';
        ele.style.height = ele.scrollHeight + 'px';
        setTimeout(() => {
            ele.classList.add("open");
            ele.style.height = "auto";
            ele.style.maxHeight = "";
        }, 300);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const accordionButtons = document.querySelectorAll("[data-accordion-target]");
    accordionButtons.forEach(button => {
        button.addEventListener("click", () => {
            const targetAccordion = document.querySelector(button.dataset.accordionTarget);

            if (targetAccordion.classList.contains('open')) {
                ayutenn.accordion.close(targetAccordion);
            } else {
                ayutenn.accordion.open(targetAccordion);

                if (targetAccordion.hasAttribute('data-accordion-group')) {
                    const group = document.querySelectorAll(`[data-accordion-group="${targetAccordion.dataset.accordionGroup}"]`);
                    group.forEach(ele => {
                        if(targetAccordion.dataset.accordionId !== ele.dataset.accordionId){
                            if (ele.classList.contains('open')) {
                                ayutenn.accordion.close(ele);
                            }
                        }
                    });
                }
            }
        });
    });
});