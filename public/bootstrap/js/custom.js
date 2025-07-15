// FAQ Section
document.addEventListener("DOMContentLoaded", function () {
    // Category filtering
    const categoryButtons = document.querySelectorAll(".category-btn");
    const faqCategories = document.querySelectorAll(".faq-category");
    const noResults = document.getElementById("noResults");

    categoryButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-category");

            // Update active button
            categoryButtons.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");

            // Filter categories
            let hasVisibleItems = false;

            faqCategories.forEach((cat) => {
                if (
                    category === "all" ||
                    cat.getAttribute("data-category") === category
                ) {
                    cat.style.display = "block";
                    hasVisibleItems = true;
                } else {
                    cat.style.display = "none";
                }
            });

            // Handle no results
            noResults.style.display = hasVisibleItems ? "none" : "block";
        });
    });

    // FAQ search functionality
    const faqSearch = document.getElementById("faqSearch");

    faqSearch.addEventListener("input", function () {
        const searchTerm = this.value.toLowerCase().trim();
        let hasResults = false;

        // Reset category filtering
        categoryButtons.forEach((btn) => btn.classList.remove("active"));
        document
            .querySelector('.category-btn[data-category="all"]')
            .classList.add("active");

        if (searchTerm === "") {
            // Show all if search is empty
            faqCategories.forEach((cat) => {
                cat.style.display = "block";
                highlightText(cat, "");
                hasResults = true;
            });
        } else {
            // Search through questions and answers
            faqCategories.forEach((category) => {
                let categoryHasVisibleItems = false;
                const accordionItems =
                    category.querySelectorAll(".accordion-item");

                accordionItems.forEach((item) => {
                    const question = item
                        .querySelector(".accordion-button")
                        .textContent.toLowerCase();
                    const answer = item
                        .querySelector(".accordion-body")
                        .textContent.toLowerCase();

                    if (
                        question.includes(searchTerm) ||
                        answer.includes(searchTerm)
                    ) {
                        item.style.display = "block";
                        highlightText(item, searchTerm);
                        categoryHasVisibleItems = true;
                        hasResults = true;
                    } else {
                        item.style.display = "none";
                    }
                });

                // Show category if it has matching items
                category.style.display = categoryHasVisibleItems
                    ? "block"
                    : "none";
            });
        }

        // Show/hide no results message
        noResults.style.display = hasResults ? "none" : "block";
    });

    // Helper function to highlight search terms
    function highlightText(element, searchTerm) {
        if (!searchTerm) {
            // Remove any existing highlights
            const highlighted = element.querySelectorAll(".highlight");
            highlighted.forEach((el) => {
                const parent = el.parentNode;
                parent.replaceChild(
                    document.createTextNode(el.textContent),
                    el
                );
                parent.normalize();
            });
            return;
        }

        // Highlight question text
        const questionElements = element.querySelectorAll(".accordion-button");
        questionElements.forEach((el) => {
            highlightElement(el, searchTerm);
        });

        // Highlight answer text
        const answerElements = element.querySelectorAll(".accordion-body");
        answerElements.forEach((el) => {
            highlightElement(el, searchTerm);
        });
    }

    function highlightElement(element, searchTerm) {
        const regex = new RegExp(searchTerm, "gi");
        const text = element.textContent;

        if (text.match(regex)) {
            const newText = text.replace(
                regex,
                (match) => `<span class="highlight">${match}</span>`
            );
            element.innerHTML = newText;
        }
    }

    // Auto-collapse all except first item in each category
    document
        .querySelectorAll(".accordion-collapse")
        .forEach((collapse, index) => {
            if (index % 4 !== 0) {
                // Only keep first item expanded in each accordion
                collapse.classList.remove("show");
            }
        });
});

