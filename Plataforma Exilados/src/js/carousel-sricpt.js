document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const mainImage = card.querySelector('.card-image');
        // Pega todas as imagens dentro do div oculto
        const hiddenImages = card.querySelectorAll('.hidden-images img');
        const prevButton = card.querySelector('.prev-button');
        const nextButton = card.querySelector('.next-button');

        // Transforma NodeList em Array para facilitar a manipulação
        const imagesArray = Array.from(hiddenImages);

        // Encontra o índice da imagem atualmente visível (a primeira no hidden-images)
        let currentImageIndex = 0;

        // Função para atualizar a imagem principal
        const updateImage = (index) => {
            if (imagesArray.length > 0) {
                mainImage.src = imagesArray[index].src;
                mainImage.alt = imagesArray[index].alt;
            }
        };

        // Event listener para o botão "Próximo"
        nextButton.addEventListener('click', () => {
            currentImageIndex = (currentImageIndex + 1) % imagesArray.length;
            updateImage(currentImageIndex);
        });

        // Event listener para o botão "Anterior"
        prevButton.addEventListener('click', () => {
            // Garante que o índice não seja negativo
            currentImageIndex = (currentImageIndex - 1 + imagesArray.length) % imagesArray.length;
            updateImage(currentImageIndex);
        });

        // Inicializa a imagem principal com a primeira imagem da lista oculta
        // Isso garante que mesmo que a src do mainImage no HTML esteja diferente, o JS a corrigirá.
        if (imagesArray.length > 0) {
            updateImage(currentImageIndex);
        } else {
            console.warn('Nenhuma imagem encontrada no .hidden-images para este card:', card);
        }
    });
});