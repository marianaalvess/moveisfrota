/* =========================================
   Chatbot — Frota Móveis Planejados
   State-machine chatbot with FAQ & Quote flow
   ========================================= */

(function () {
    'use strict';

    // ── Chatbot Translations ──
    var chatbotTranslations = {
        pt: {
            welcome: "Olá! Sou o assistente virtual da Frota Móveis Planejados.\nComo posso ajudar você hoje?",
            menu_faq: "Perguntas Frequentes",
            menu_quote: "Solicitar Orçamento",
            back_menu: "Voltar ao Menu",
            ask_name: "Qual é o seu nome?",
            ask_furniture: "Que tipo de móvel você quer fazer?",
            furniture_kitchen: "Cozinha Planejada",
            furniture_wardrobe: "Guarda-Roupa",
            furniture_closet: "Closet",
            furniture_bathroom: "Móvel de Banheiro",
            furniture_living: "Móvel de Sala",
            furniture_bedroom: "Quarto",
            furniture_office: "Escritório",
            furniture_other: "Outro",
            ask_project: "Você já tem projeto ou medidas?",
            project_yes: "Sim, tenho projeto/medidas",
            project_no: "Não, preciso de projeto",
            ask_location: "Qual é a cidade/bairro de instalação? (ex: Cascavel, Toledo, Foz do Iguaçu...)",
            ask_observations: "Quer acrescentar alguma observação ou detalhe adicional?",
            summary_title: "Obrigado, {name}! Aqui está o resumo do seu pedido:",
            summary_name: "Nome",
            summary_furniture: "Tipo de Móvel",
            summary_project: "Tem Projeto",
            summary_location: "Local",
            summary_obs: "Observações",
            send_whatsapp: "Enviar pelo WhatsApp",
            wa_message: "Olá, vim através do site moveisfrota.com.br e gostaria de solicitar um orçamento.\n\nNome: {name}\nTipo de Móvel: {furniture}\nTem Projeto: {project}\nLocal: {location}\nObservações: {obs}",
            type_here: "Escreva aqui...",
            faq_title: "Selecione uma pergunta:",
            faq_cat_title: "Selecione uma categoria:",
            back_categories: "Voltar às categorias",
            more_questions: "Mais perguntas desta categoria",
            back: "Voltar"
        },
        en: {
            welcome: "Hello! I'm the Frota Móveis Planejados virtual assistant.\nHow can I help you today?",
            menu_faq: "Frequently Asked Questions",
            menu_quote: "Request a Quote",
            back_menu: "Back to Menu",
            ask_name: "What is your name?",
            ask_furniture: "What type of furniture are you looking for?",
            furniture_kitchen: "Kitchen",
            furniture_wardrobe: "Wardrobe",
            furniture_closet: "Closet",
            furniture_bathroom: "Bathroom",
            furniture_living: "Living Room",
            furniture_bedroom: "Bedroom",
            furniture_office: "Office",
            furniture_other: "Other",
            ask_project: "Do you already have a project/measurements?",
            project_yes: "Yes, I have a project/measurements",
            project_no: "No, I need a project",
            ask_location: "What is the installation location?",
            ask_observations: "Would you like to add any observations or additional details?",
            summary_title: "Thank you, {name}! Here's a summary of your request:",
            summary_name: "Name",
            summary_furniture: "Furniture Type",
            summary_project: "Has Project",
            summary_location: "Location",
            summary_obs: "Observations",
            send_whatsapp: "Send via WhatsApp",
            wa_message: "Hello, I came through the moveisfrota.com.br website and would like to request a quote.\n\nName: {name}\nFurniture Type: {furniture}\nHas Project: {project}\nLocation: {location}\nObservations: {obs}",
            type_here: "Type here...",
            faq_title: "Select a question:",
            faq_cat_title: "Select a category:",
            back_categories: "Back to categories",
            more_questions: "More questions from this category",
            back: "Back"
        },
        es: {
            welcome: "¡Hola! Soy el asistente virtual de Frota Móveis Planejados.\n¿Cómo puedo ayudarle hoy?",
            menu_faq: "Preguntas Frecuentes",
            menu_quote: "Solicitar Presupuesto",
            back_menu: "Volver al Menú",
            ask_name: "¿Cuál es su nombre?",
            ask_furniture: "¿Qué tipo de mueble desea?",
            furniture_kitchen: "Cocina",
            furniture_wardrobe: "Armario",
            furniture_closet: "Closet",
            furniture_bathroom: "Baño",
            furniture_living: "Sala",
            furniture_bedroom: "Dormitorio",
            furniture_office: "Oficina",
            furniture_other: "Otro",
            ask_project: "¿Ya tiene un proyecto o medidas?",
            project_yes: "Sí, tengo un proyecto/medidas",
            project_no: "No, necesito un proyecto",
            ask_location: "¿Cuál es el lugar de instalación?",
            ask_observations: "¿Desea añadir alguna observación o detalle adicional?",
            summary_title: "¡Gracias, {name}! Aquí está el resumen de su solicitud:",
            summary_name: "Nombre",
            summary_furniture: "Tipo de Mueble",
            summary_project: "Tiene Proyecto",
            summary_location: "Lugar",
            summary_obs: "Observaciones",
            send_whatsapp: "Enviar por WhatsApp",
            wa_message: "Hola, vine a través del sitio moveisfrota.com.br y me gustaría solicitar un presupuesto.\n\nNombre: {name}\nTipo de Mueble: {furniture}\nTiene Proyecto: {project}\nLugar: {location}\nObservaciones: {obs}",
            type_here: "Escriba aquí...",
            faq_title: "Seleccione una pregunta:",
            faq_cat_title: "Seleccione una categoría:",
            back_categories: "Volver a las categorías",
            more_questions: "Más preguntas de esta categoría",
            back: "Volver"
        },
        fr: {
            welcome: "Bonjour ! Je suis l'assistant virtuel de Frota Móveis Planejados.\nComment puis-je vous aider aujourd'hui ?",
            menu_faq: "Questions Fréquentes",
            menu_quote: "Demander un Devis",
            back_menu: "Retour au Menu",
            ask_name: "Quel est votre nom ?",
            ask_furniture: "Quel type de meuble souhaitez-vous ?",
            furniture_kitchen: "Cuisine",
            furniture_wardrobe: "Armoire",
            furniture_closet: "Dressing",
            furniture_bathroom: "Salle de Bain",
            furniture_living: "Salon",
            furniture_bedroom: "Chambre",
            furniture_office: "Bureau",
            furniture_other: "Autre",
            ask_project: "Avez-vous déjà un projet ou des mesures ?",
            project_yes: "Oui, j'ai un projet/des mesures",
            project_no: "Non, j'ai besoin d'un projet",
            ask_location: "Quel est le lieu d'installation ?",
            ask_observations: "Souhaitez-vous ajouter des observations ou des détails supplémentaires ?",
            summary_title: "Merci, {name} ! Voici le résumé de votre demande :",
            summary_name: "Nom",
            summary_furniture: "Type de Meuble",
            summary_project: "A un Projet",
            summary_location: "Lieu",
            summary_obs: "Observations",
            send_whatsapp: "Envoyer par WhatsApp",
            wa_message: "Bonjour, je viens du site moveisfrota.com.br et j'aimerais demander un devis.\n\nNom : {name}\nType de Meuble : {furniture}\nA un Projet : {project}\nLieu : {location}\nObservations : {obs}",
            type_here: "Écrivez ici...",
            faq_title: "Sélectionnez une question :",
            faq_cat_title: "Sélectionnez une catégorie :",
            back_categories: "Retour aux catégories",
            more_questions: "Plus de questions de cette catégorie",
            back: "Retour"
        },
        de: {
            welcome: "Hallo! Ich bin der virtuelle Assistent von Frota Móveis Planejados.\nWie kann ich Ihnen heute helfen?",
            menu_faq: "Häufig gestellte Fragen",
            menu_quote: "Angebot anfordern",
            back_menu: "Zurück zum Menü",
            ask_name: "Wie heißen Sie?",
            ask_furniture: "Welche Art von Möbel suchen Sie?",
            furniture_kitchen: "Küche",
            furniture_wardrobe: "Kleiderschrank",
            furniture_closet: "Ankleidezimmer",
            furniture_bathroom: "Badezimmer",
            furniture_living: "Wohnzimmer",
            furniture_bedroom: "Schlafzimmer",
            furniture_office: "Büro",
            furniture_other: "Sonstiges",
            ask_project: "Haben Sie bereits ein Projekt oder Maße?",
            project_yes: "Ja, ich habe ein Projekt/Maße",
            project_no: "Nein, ich brauche ein Projekt",
            ask_location: "Wo ist der Installationsort?",
            ask_observations: "Möchten Sie Beobachtungen oder zusätzliche Details hinzufügen?",
            summary_title: "Danke, {name}! Hier ist die Zusammenfassung Ihrer Anfrage:",
            summary_name: "Name",
            summary_furniture: "Möbeltyp",
            summary_project: "Hat Projekt",
            summary_location: "Ort",
            summary_obs: "Beobachtungen",
            send_whatsapp: "Per WhatsApp senden",
            wa_message: "Hallo, ich komme von der Website moveisfrota.com.br und möchte ein Angebot anfordern.\n\nName: {name}\nMöbeltyp: {furniture}\nHat Projekt: {project}\nOrt: {location}\nBeobachtungen: {obs}",
            type_here: "Hier schreiben...",
            faq_title: "Wählen Sie eine Frage:",
            faq_cat_title: "Wählen Sie eine Kategorie:",
            back_categories: "Zurück zu den Kategorien",
            more_questions: "Weitere Fragen aus dieser Kategorie",
            back: "Zurück"
        }
    };

    // ── State ──
    var state = 'WELCOME';
    var quoteName = '';
    var quoteFurniture = '';
    var quoteProject = '';
    var quoteLocation = '';
    var quoteObs = '';
    var WHATSAPP_NUMBER = '554599180019';

    // ── Elements ──
    var chatWindow, chatMessages, chatInput, chatInputField, chatSendBtn, chatToggle;

    // ── Get current language ──
    function getLang() {
        // Read from localStorage (same key used by script.js setLanguage)
        var saved = localStorage.getItem('preferredLang');
        if (saved && chatbotTranslations[saved]) return saved;
        // Fallback: read from html lang attribute
        var htmlLang = document.documentElement.lang;
        if (htmlLang && chatbotTranslations[htmlLang]) return htmlLang;
        return 'pt';
    }

    function t(key) {
        var lang = getLang();
        return (chatbotTranslations[lang] && chatbotTranslations[lang][key]) || chatbotTranslations.pt[key] || key;
    }

    function getFaqCategories() {
    var lang = getLang();
    var trans = (typeof translations !== 'undefined' && translations[lang]) ? translations[lang] : (typeof chatbotTranslations !== 'undefined' && chatbotTranslations[lang] ? chatbotTranslations[lang] : {});

    var categories = [
        { id: 1, title: trans['faq_cat_1'] || "Projeto e Processo", qIds: [1, 2, 3, 4, 5] },
        { id: 2, title: trans['faq_cat_2'] || "OrÃ§amento e Investimento", qIds: [6, 7, 8, 9, 10] },
        { id: 3, title: trans['faq_cat_3'] || "Materiais e Acabamentos", qIds: [11, 12, 13, 14, 15] },
        { id: 4, title: trans['faq_cat_4'] || "InstalaÃ§Ã£o e Montagem", qIds: [16, 17, 18, 19, 20] },
        { id: 5, title: trans['faq_cat_5'] || "Garantia e Suporte", qIds: [21, 22, 23, 24, 25] }
    ];

    return categories;
}

    function getFaqQuestionById(id) {
        var lang = getLang();
        var trans = (typeof translations !== 'undefined' && translations[lang]) ? translations[lang] : {};
        var qKey = 'faq_' + id + '_q';
        var aKey = 'faq_' + id + '_a';
        if (trans[qKey] && trans[aKey]) {
            return { q: trans[qKey], a: trans[aKey] };
        }
        return null;
    }

    function scrollToBottom() {
        if (!chatMessages) return;
        requestAnimationFrame(function () {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        });
    }

    // ── Message Rendering ──
    function addBotMessage(text) {
        var msg = document.createElement('div');
        msg.className = 'chat-msg chat-bot';
        var bubble = document.createElement('div');
        bubble.className = 'chat-bubble';
        bubble.innerHTML = text.replace(/\n/g, '<br>');
        msg.appendChild(bubble);
        chatMessages.appendChild(msg);
        scrollToBottom();
    }

    function addUserMessage(text) {
        var msg = document.createElement('div');
        msg.className = 'chat-msg chat-user';
        var bubble = document.createElement('div');
        bubble.className = 'chat-bubble';
        bubble.textContent = text;
        msg.appendChild(bubble);
        chatMessages.appendChild(msg);
        scrollToBottom();
    }

    function addQuickReplies(buttons) {
        var container = document.createElement('div');
        container.className = 'chat-quick-replies';
        buttons.forEach(function (btn) {
            var el = document.createElement('button');
            el.type = 'button';
            el.className = 'chat-quick-btn';
            el.textContent = btn.label;
            el.onclick = function (e) {
                e.preventDefault();
                e.stopPropagation();
                container.remove();
                btn.action();
            };
            container.appendChild(el);
        });
        chatMessages.appendChild(container);
        scrollToBottom();
    }

    function addSummaryCard(name, furniture, project, location, obs) {
        var card = document.createElement('div');
        card.className = 'chat-summary-card';
        card.innerHTML =
            '<p class="chat-summary-title">' + t('summary_title').replace('{name}', name) + '</p>' +
            '<div class="chat-summary-row"><strong>' + t('summary_name') + ':</strong> ' + name + '</div>' +
            '<div class="chat-summary-row"><strong>' + t('summary_furniture') + ':</strong> ' + furniture + '</div>' +
            '<div class="chat-summary-row"><strong>' + t('summary_project') + ':</strong> ' + project + '</div>' +
            '<div class="chat-summary-row"><strong>' + t('summary_location') + ':</strong> ' + location + '</div>' +
            (obs ? '<div class="chat-summary-row"><strong>' + t('summary_obs') + ':</strong> ' + obs + '</div>' : '');
        chatMessages.appendChild(card);
        scrollToBottom();
    }

    function addWhatsAppButton(name, furniture, project, location, obs) {
        var message = t('wa_message')
            .replace('{name}', name)
            .replace('{furniture}', furniture)
            .replace('{project}', project)
            .replace('{location}', location)
            .replace('{obs}', obs || 'Nenhuma');
        var url = 'https://wa.me/' + WHATSAPP_NUMBER + '?text=' + encodeURIComponent(message);

        var container = document.createElement('div');
        container.className = 'chat-quick-replies';

        var btn = document.createElement('a');
        btn.className = 'chat-whatsapp-btn';
        // Styling inline based on user request (black background, whatsapp icon)
        btn.style.backgroundColor = '#000000';
        btn.style.color = '#ffffff';
        btn.href = url;
        btn.target = '_blank';
        btn.rel = 'noopener noreferrer';
        btn.innerHTML = '<i class="fa-brands fa-whatsapp"></i> ' + t('send_whatsapp');
        container.appendChild(btn);

        var backBtn = document.createElement('button');
        backBtn.type = 'button';
        backBtn.className = 'chat-quick-btn';
        backBtn.textContent = t('back_menu');
        backBtn.onclick = function (e) {
            e.preventDefault();
            e.stopPropagation();
            container.remove();
            showMenu();
        };
        container.appendChild(backBtn);

        chatMessages.appendChild(container);
        scrollToBottom();
    }

    // ── Input handling ──
    function showInputField() {
        chatInput.style.display = 'flex';
        chatInputField.placeholder = t('type_here');
        setTimeout(function () { chatInputField.focus(); }, 100);
    }

    function hideInputField() {
        chatInput.style.display = 'none';
        chatInputField.value = '';
    }

    // ── Flows ──
    function showWelcome() {
        state = 'WELCOME';
        chatMessages.innerHTML = '';
        hideInputField();
        addBotMessage(t('welcome'));
        setTimeout(function () { showMenu(); }, 600);
    }

    function showMenu() {
        state = 'MENU';
        hideInputField();
        addQuickReplies([
            { label: t('menu_faq'), action: showFAQList },
            { label: t('menu_quote'), action: startQuoteFlow }
        ]);
    }

    function showFAQList() {
        state = 'FAQ_LIST';
        hideInputField();
        addUserMessage(t('menu_faq'));
        addBotMessage(t('faq_cat_title'));

        var categories = getFaqCategories();
        var buttons = [];
        categories.forEach(function (cat) {
            buttons.push({
                label: cat.title,
                action: function () { showFAQCategory(cat); }
            });
        });
        buttons.push({
            label: t('back_menu'),
            action: function () { addUserMessage(t('back_menu')); showMenu(); }
        });
        addQuickReplies(buttons);
    }

    function showFAQCategory(category) {
        state = 'FAQ_CATEGORY';
        hideInputField();
        addUserMessage(category.title);
        addBotMessage(t('faq_title'));

        var buttons = [];
        category.qIds.forEach(function (id) {
            var faq = getFaqQuestionById(id);
            if (faq) {
                buttons.push({
                    label: faq.q,
                    action: function () { showFAQAnswer(faq, category); }
                });
            }
        });
        buttons.push({
            label: t('back_categories'),
            action: function () { addUserMessage(t('back')); showFAQList(); }
        });
        buttons.push({
            label: t('back_menu'),
            action: function () { addUserMessage(t('back_menu')); showMenu(); }
        });
        addQuickReplies(buttons);
    }

    function showFAQAnswer(faq, category) {
        state = 'FAQ_ANSWER';
        addUserMessage(faq.q);
        addBotMessage(faq.a);
        addQuickReplies([
            {
                label: t('more_questions'),
                action: function () { addUserMessage(t('back')); showFAQCategory(category); }
            },
            {
                label: t('back_categories'),
                action: function () { addUserMessage(t('menu_faq')); showFAQList(); }
            },
            {
                label: t('back_menu'),
                action: function () { addUserMessage(t('back_menu')); showMenu(); }
            }
        ]);
    }

    function startQuoteFlow() {
        state = 'QUOTE_NAME';
        quoteName = '';
        quoteFurniture = '';
        quoteProject = '';
        quoteLocation = '';
        quoteObs = '';
        addUserMessage(t('menu_quote'));
        addBotMessage(t('ask_name'));
        showInputField();
    }

    function handleNameInput(name) {
        quoteName = name;
        state = 'QUOTE_FURNITURE';
        addUserMessage(name);
        addBotMessage(t('ask_furniture'));
        hideInputField();

        var furnitureKeys = [
            'furniture_kitchen', 'furniture_wardrobe', 'furniture_closet',
            'furniture_bathroom', 'furniture_living', 'furniture_bedroom',
            'furniture_office', 'furniture_other'
        ];
        var buttons = [];
        furnitureKeys.forEach(function (key) {
            buttons.push({
                label: t(key),
                action: function () { handleFurnitureSelect(t(key)); }
            });
        });
        addQuickReplies(buttons);
    }

    function handleFurnitureSelect(furniture) {
        quoteFurniture = furniture;
        state = 'QUOTE_PROJECT';
        addUserMessage(furniture);
        addBotMessage(t('ask_project'));

        var buttons = [
            { label: t('project_yes'), action: function () { handleProjectSelect(t('project_yes')); } },
            { label: t('project_no'), action: function () { handleProjectSelect(t('project_no')); } }
        ];
        addQuickReplies(buttons);
    }

    function handleProjectSelect(project) {
        quoteProject = project;
        state = 'QUOTE_LOCATION';
        addUserMessage(project);
        addBotMessage(t('ask_location'));
        showInputField();
    }

    function handleLocationInput(location) {
        quoteLocation = location;
        state = 'QUOTE_OBSERVATIONS';
        addUserMessage(location);
        addBotMessage(t('ask_observations'));
        showInputField();
    }

    function handleObservationsInput(obs) {
        quoteObs = obs;
        state = 'QUOTE_SUMMARY';
        addUserMessage(obs || t('menu_quote')); // fallback if empty
        hideInputField();
        addSummaryCard(quoteName, quoteFurniture, quoteProject, quoteLocation, quoteObs);
        addWhatsAppButton(quoteName, quoteFurniture, quoteProject, quoteLocation, quoteObs);
    }

    function handleUserInput() {
        var val = chatInputField.value.trim();
        if (!val) return;
        chatInputField.value = '';

        if (state === 'QUOTE_NAME') {
            handleNameInput(val);
        } else if (state === 'QUOTE_LOCATION') {
            handleLocationInput(val);
        } else if (state === 'QUOTE_OBSERVATIONS') {
            handleObservationsInput(val);
        }
    }

    // ── Init ──
    function init() {
        chatToggle = document.getElementById('chatbot-toggle');
        chatWindow = document.getElementById('chatbot-window');
        chatMessages = document.getElementById('chatbot-messages');
        chatInput = document.getElementById('chatbot-input');
        chatInputField = document.getElementById('chatbot-input-field');
        chatSendBtn = document.getElementById('chatbot-send');
        var chatClose = document.getElementById('chatbot-close');

        if (!chatToggle || !chatWindow) return;

        // Toggle open/close
        chatToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var isOpen = chatWindow.classList.toggle('open');
            chatToggle.classList.toggle('open', isOpen);
            if (isOpen && chatMessages.children.length === 0) {
                showWelcome();
            }
        });

        chatClose.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            chatWindow.classList.remove('open');
            chatToggle.classList.remove('open');
        });

        // Input handling — both click and touchend for mobile
        function onSendClick(e) {
            e.preventDefault();
            e.stopPropagation();
            handleUserInput();
        }
        chatSendBtn.addEventListener('click', onSendClick);
        chatSendBtn.addEventListener('touchend', onSendClick);

        chatInputField.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                handleUserInput();
            }
        });

        // On mobile, when the keyboard opens, scroll the input into view
        chatInputField.addEventListener('focus', function () {
            setTimeout(function () {
                chatInput.scrollIntoView({ behavior: 'smooth', block: 'end' });
                scrollToBottom();
            }, 300);
        });

        // When language changes (script.js sets document.documentElement.lang), reset chatbot
        var lastLang = getLang();
        setInterval(function () {
            var currentLang = getLang();
            if (currentLang !== lastLang) {
                lastLang = currentLang;
                // Reset chatbot to show welcome in the new language
                if (chatWindow.classList.contains('open')) {
                    showWelcome();
                } else {
                    chatMessages.innerHTML = '';
                }
                chatInputField.placeholder = t('type_here');
            }
        }, 500);
    }

    // Start when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();


