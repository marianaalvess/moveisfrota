/**
 * Script for Frota Móveis Planejados - moveisfrota.com.br
 */

const translations = {
    pt: {
        meta_title: "Móveis Planejados em Cascavel PR | Cozinhas, Guarda-Roupas Sob Medida | Frota Móveis",
        meta_description: "Móveis planejados em Cascavel-PR. Design 3D, cozinhas planejadas, guarda-roupas premium. Atendemos Cascavel, Toledo, Foz do Iguaçu e região. Orçamento gratuito. +55 45 3096-0906",
        nav_home: "Página Inicial",
        nav_about: "Sobre",
        nav_services: "Serviços",
        nav_portfolio: "Transformações",
        nav_contact: "Contato",
        btn_quote: "Solicitar Orçamento",
        btn_nav_contact: "Fale Conosco",
        btn_portfolio: "Ver Portfólio",
        btn_hero_contact: "Fale Conosco",
        btn_read_more: "Ler Mais <svg class='fa-icon fa-arrow-right' aria-hidden='true'><use href='#fa-arrow-right'></use></svg>",
        hero_subtitle: "ESPECIALISTAS EM MÓVEIS PLANEJADOS",
        hero_title_1: "Transforme Seus Ambientes em",
        hero_title_2: "Obras de Arte",
        hero_title_3: "Planejadas",
        hero_desc: "Móveis planejados que unem funcionalidade, design e qualidade.<br>Cada projeto é único, assim como o seu espaço.",
        exp_number: "25+",
        exp_text: "Anos de<br>Experiência",
        about_subtitle: "Quem Somos",
        about_title_text: "Nossa",
        about_title_em: "História",
        about_text_1: "A Frota Móveis Planejados nasce da união de duas gerações apaixonadas pela marcenaria de excelência. Silo Frota dos Anjos, o fundador, com décadas de experiência artesanal em marcenaria de alto padrão, construiu uma reputação sólida em Cascavel e na região Oeste do Paraná.",
        about_text_2: "Silas Frota dos Anjos Neto trouxe inovação, gestão moderna e tecnologia para o negócio familiar, combinando a tradição da marcenaria artesanal com design 3D, materiais de ponta e processos eficientes. Juntos, garantem que cada detalhe — do acabamento perfeito à funcionalidade inteligente — supere as expectativas dos clientes.",
        about_text_3: "Em nossa marcenaria em Cascavel-PR, criamos projetos únicos de móveis planejados. Com muitos projetos entregues e satisfação garantida, atendemos toda a região Oeste do Paraná: Cascavel, Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina e cidades vizinhas. Utilizamos MDF das marcas Arauco, Duratex, Guararapes e Sudati, ferragens de primeira linha (Blum, Häfele) em um processo 100% transparente: do projeto personalizado à instalação profissional.",
        stat_1_num: "10+ Anos",
        stat_1_desc: "De Experiência",
        stat_2_num: "Muitos Projetos",
        stat_2_desc: "Entregues",
        stat_3_num: "100%",
        stat_3_desc: "Satisfação",
        services_subtitle: "O Que Fazemos",
        services_title_text: "Nossos",
        services_title_em: "Serviços",
        srv_1_title: "Móveis Planejados",
        srv_1_desc: "Peças únicas projetadas ao milímetro. Garantimos aproveitamento total do espaço e acabamentos de excelência.",
        srv_2_title: "Projeto 3D de Interiores",
        srv_2_desc: "Visualização 3D completa do seu projeto. Harmonizamos materiais e iluminação para unir estética e funcionalidade.",
        srv_3_title: "Guarda-Roupas e Closets Planejados",
        srv_3_desc: "Guarda-roupas e closets sob medida com organização personalizada. Gavetas com amortecimento e LED integrado para máxima praticidade.",
        srv_4_title: "Cozinhas Planejadas",
        srv_4_desc: "Cozinhas robustas com materiais resistentes à umidade e ferragens de primeira linha. Do rústico ao minimalista.",
        srv_5_title: "Móveis para Banheiro",
        srv_5_desc: "Mobiliário resistente à umidade com design sofisticado. Soluções duráveis e inteligentes para a organização do seu banheiro.",
        srv_6_title: "Mobiliário Comercial",
        srv_6_desc: "Balcões e móveis de escritório que elevam sua marca. Soluções ergonômicas projetadas para impressionar.",
        port_subtitle: "Nosso Trabalho",
        port_title_text: "Transformações",
        port_title_em: "Realizadas",
        port_desc: "Veja nossos projetos recentes e surpreenda-se com os resultados.",
        port_1_title: "Móvel de Sala 3-em-1: TV, Lareira e Bar",
        port_1_desc: "Estante à medida em madeira e mármore que une entretenimento, conforto e sofisticação.",
        port_2_title: "Cozinha Moderna Verde Sálvia",
        port_2_desc: "Ilha em mármore e painel ripado iluminado.",
        port_3_title: "Guarda-Roupa Planejado com Área de Janela",
        port_3_desc: "Solução de armazenamento otimizada com gavetas centrais e portas laterais, perfeita para aproveitar cada centímetro do seu espaço.",
        port_4_title: "Escritório Executivo Planejado",
        port_4_desc: "O equilíbrio perfeito entre tecnologia, conforto e sofisticação.",
        port_5_title: "O seu espaço é o próximo?",
        port_5_desc: "Vamos transformar a sua visão em realidade com o toque de luxo que a sua casa merece.",
        port_5_btn: "SOLICITAR ORÇAMENTO",
        port_6_title: "Cozinha Moderna em Madeira e Mármore",
        port_6_desc: "Inspire-se com este design sofisticado que une armários planejados, ilha central com acabamento ripado e a elegância atemporal dos revestimentos claros.",
        port_7_title: "Home Office Moderno com Toque Industrial",
        port_7_desc: "Explore ideias de prateleiras suspensas, parede de cimento queimado e marcenaria inteligente para otimizar seu espaço de trabalho.",
        port_8_title: "Armário com Escrivaninha Embutida",
        port_8_desc: "Minimalismo e funcionalidade em marcenaria sob medida.",
        port_9_title: "Painel para TV Suspenso Minimalista com LED",
        port_9_desc: "O equilíbrio perfeito entre funcionalidade e luxo. Valorize sua sala de estar com este móvel contemporâneo, combinando texturas naturais e nichos decorativos.",
        port_10_title: "Home Theater Planejado Amadeirado",
        port_10_desc: "Sofisticação com iluminação embutida e nichos laterais.",
        port_11_title: "Dormitório Moderno com Iluminação",
        port_11_desc: "Design compacto e funcional com cabeceira integrada.",
        port_12_title: "Minimalismo Ripado",
        port_12_desc: "Sofisticação e otimização de espaço sob medida.",
        port_13_title: "Gabinete Suspenso Minimalista",
        port_13_desc: "Design flutuante com cuba dupla e acabamento premium.",
        port_btn_more: "Ver Mais Projetos",
        port_more_title: "Mais Transformações",
        badge_before: "ANTES",
        badge_after: "DEPOIS",
        process_subtitle: "Como Trabalhamos",
        process_title_text: "Nosso",
        process_title_em: "Processo",
        process_desc: "",
        proc_1_title: "Consultoria",
        proc_1_desc: "Reunião inicial para entender suas necessidades, ambiente e estilo.",
        proc_2_title: "Projeto 3D",
        proc_2_desc: "Apresentação do projeto em renderizações realistas para aprovação.",
        proc_3_title: "Produção",
        proc_3_desc: "Fabricação meticulosa em nossa marcenaria com materiais premium.",
        proc_4_title: "Instalação",
        proc_4_desc: "Montagem final no local feita pelos nossos especialistas.",
        test_subtitle: "Avaliações",
        test_title_text: "O Que Dizem Nossos",
        test_title_em: "Clientes",
        test_1_desc: "\"Sempre buscando entender exatamente o que precisávamos, sem dificuldade em aceitar ajustes. Entregou tudo perfeitamente, antes do prazo, com muita simpatia e profissionalismo!\"",
        test_2_desc: "\"Profissional que demonstrou excelência, criatividade e dedicação ao projeto. Atento aos detalhes e aos interesses do cliente, superou todas as expectativas com propostas bem fundamentadas.\"",
        test_3_desc: "\"Excelente profissional. Concluiu o projeto do quarto em um fim de semana com todos os detalhes solicitados. Trabalho de qualidade, rápido, com grande disponibilidade e paciência. Recomendo muito.\"",
        test_4_desc: "\"Móveis muito bem acabados e de qualidade superior. Recomendo demais. Além do melhor atendimento que já tivemos.\"",
        test_5_desc: "\"Recomendo muito! Tudo fluiu perfeitamente desde o primeiro contato, projeto e entrega. Material e serviço de altíssima qualidade.\"",
        test_6_desc: "\"Super profissionais, atentos aos detalhes e muito atenciosos. Recomendo sem hesitar.\"",
        test_client_label: "Cliente",
        faq_subtitle: "Dúvidas Comuns",
        faq_title_text: "Perguntas",
        faq_title_em: "Frequentes",
        faq_cat_1: "Projeto e Processo",
        faq_cat_2: "Orçamento e Investimento",
        faq_cat_3: "Materiais e Acabamentos",
        faq_cat_4: "Instalação e Montagem",
        faq_cat_5: "Garantia e Suporte",
        faq_1_q: "Como funciona a consultoria para móveis planejados em Cascavel-PR?",
        faq_1_a: "Iniciamos com uma visita técnica gratuita em Cascavel e toda a região Oeste do Paraná para avaliar o ambiente, tirar medidas exatas e entender suas ideias de design. O objetivo é alinhar estilo, orçamento e necessidades reais.",
        faq_2_q: "Fazem projetos 3D para cozinhas planejadas e guarda-roupas?",
        faq_2_a: "Sim. Apresentamos um projeto 3D realista e detalhado antes de iniciar qualquer produção. Assim você visualiza exatamente como ficará o móvel planejado no seu ambiente. Só iniciamos a fabricação após sua aprovação total.",
        faq_3_q: "Qual é o prazo de entrega para móveis planejados?",
        faq_3_a: "O prazo depende da complexidade do projeto. Peças individuais levam em média 3 a 5 semanas. Projetos completos de cozinhas planejadas e closets demoram de 6 a 8 semanas, sempre garantindo excelência nos acabamentos.",
        faq_4_q: "Como garantem o encaixe perfeito dos móveis planejados?",
        faq_4_a: "Por meio de um levantamento técnico detalhado no local em Cascavel e região. Avaliamos desníveis, esquadrias e instalações, permitindo que a fabricação seja 100% sob medida para o seu imóvel, sem margens de erro.",
        faq_5_q: "Posso alterar os detalhes após ver o projeto 3D?",
        faq_5_a: "Sim. Você pode ajustar acabamentos, madeiras, ferragens ou organização interna durante a fase de revisão do 3D. A fabricação só é iniciada quando você estiver totalmente satisfeito com o projeto final.",
        faq_6_q: "Como é elaborado o orçamento para móveis planejados?",
        faq_6_a: "Nossos orçamentos são justos, detalhados e 100% transparentes, sem custos ocultos. Cada material escolhido (do MDF à dobradiça) é justificado na proposta final apresentada após a aprovação do projeto.",
        faq_7_q: "Atendem em Toledo, Foz do Iguaçu e outras cidades da região?",
        faq_7_a: "Sim. Nossa marcenaria está em Cascavel-PR, o que nos permite atender com rapidez e eficiência toda a região Oeste do Paraná: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia e cidades vizinhas.",
        faq_8_q: "Qual é o investimento em um projeto de móveis planejados?",
        faq_8_a: "Não exigimos valor mínimo. Atendemos desde a fabricação de um único móvel de TV até o planejamento completo de uma residência. O orçamento se adapta à escolha dos materiais: MDF hidrófugo, MDF lacado ou acabamentos premium.",
        faq_9_q: "O transporte e montagem estão incluídos no valor?",
        faq_9_a: "Sim. Todas as propostas da Frota Móveis são entregues de forma completa. Os custos de transporte e montagem especializada na sua residência já estão integrados no valor final aprovado.",
        faq_10_q: "Garantem transparência absoluta no preço final?",
        faq_10_a: "Sim. O valor orçado e cobrado é exatamente o acordado após a definição dos materiais, ferragens e portas escolhidas. Qualquer alteração gera um orçamento revisado, sem surpresas.",
        faq_11_q: "Quais materiais são usados nos móveis planejados de alto padrão?",
        faq_11_a: "Não usamos aglomerados de baixa qualidade. Nossa base é MDF e MDF hidrófugo das marcas Arauco, Duratex, Guararapes e Sudati, garantindo frentes lisas, fosco ou texturizadas imunes ao desgaste prematuro.",
        faq_12_q: "Usam ferragens soft-close (amortecimento suave) nas cozinhas?",
        faq_12_a: "O soft-close é nosso padrão obrigatório. Utilizamos exclusivamente sistemas de deslizamento e fechamento magnético de marcas líderes mundiais (BLUM, Häfele e Emuca), garantindo durabilidade para milhões de aberturas silenciosas.",
        faq_13_q: "Fazem lacagem premium e painéis em vidro temperado?",
        faq_13_a: "Sim. Nosso ponto forte é o lacado ultra-fosco ou alto-brilho com secagem especial. Executamos divisórias de luxo combinando alumínio fino, vidro bronze ou fumê e iluminação LED integrada para closets e cozinhas impactantes.",
        faq_14_q: "Garantem resistência à umidade nos móveis de banheiro?",
        faq_14_a: "Com certeza. O mobiliário de banheiro e cozinha sofre bastante com a umidade. Por isso, utilizamos MDF hidrófugo altamente selado e fundos protetores de alumínio na área da cuba, garantindo durabilidade total.",
        faq_15_q: "Trabalham com tampos de mármore e pedra na cozinha?",
        faq_15_a: "Trabalhamos em parceria com marmoristas de excelência em Cascavel (Silestone, Dekton, mármore ou granito). A Frota Móveis estrutura a base de forma ultrarresistente nas ilhas para acomodar com segurança essas pedras pesadas.",
        faq_16_q: "Como fazem o levantamento do espaço para os móveis planejados?",
        faq_16_a: "Levamos instrumentação técnica a laser até sua casa ou apartamento em Cascavel e região. Mapeamos com precisão as paredes, tomadas, pontos de luz e rodapés antes de projetar e fabricar as peças de embutir.",
        faq_17_q: "A montagem dos móveis planejados é feita pela Frota Móveis?",
        faq_17_a: "Nunca terceirizamos a montagem para equipes informais. Os técnicos que fazem os cortes na nossa produção acompanham a montagem na sua residência, garantindo precisão, rigor nos detalhes e total cuidado com o ambiente.",
        faq_18_q: "A instalação dos móveis causa muito entulho e pó?",
        faq_18_a: "Ao contrário das marcenarias convencionais, minimizamos isso ao máximo. O grosso da fabricação ocorre em nossas instalações. Até 95% do armário ou cozinha chega à sua casa já cortado, lacado e limpo. No local, apenas o alinhamento final.",
        faq_19_q: "Como protegem o ambiente da casa durante a montagem?",
        faq_19_a: "Protegemos pisos e móveis existentes com mantas isoladoras. Todo o fluxo de painéis grandes pela sala e quarto é feito com extremo cuidado, evitando arranhões em paredes ou batentes de porta.",
        faq_20_q: "O espaço precisa estar vazio para a equipe iniciar a montagem?",
        faq_20_a: "Sim, recomendamos que a área específica da cozinha ou guarda-roupa embutido esteja livre e organizada para o acesso amplo da equipe. Ao final da montagem, garantimos a limpeza completa do interior de portas e painéis.",
        faq_21_q: "Qual é a garantia dos móveis planejados e cozinhas da Frota Móveis?",
        faq_21_a: "Oferecemos 3 anos de garantia em todos os projetos de marcenaria e guarda-roupas sob medida. Utilizamos matérias-primas de excelência que previnem defeitos estruturais e garantem longa durabilidade.",
        faq_22_q: "Têm serviço de pós-venda em Cascavel e região?",
        faq_22_a: "Sim. Prestamos assistência técnica direta e ágil a todos os nossos clientes em Cascavel e no Oeste do Paraná. Se houver qualquer problema, nos deslocamos ao local para resolver.",
        faq_23_q: "O que acontece se as portas ou gavetas desregularem?",
        faq_23_a: "A madeira e as dobradiças podem sofrer pequenos ajustes naturais no primeiro ano. Basta entrar em contato com a Frota Móveis e nossa equipe técnica fará a calibração rápida das ferragens (BLUM/Häfele) sem custo adicional.",
        faq_24_q: "Qual é a vida útil de uma cozinha planejada ou closet de alto padrão?",
        faq_24_a: "Os móveis planejados fabricados pela Frota Móveis são projetados para durar décadas. Usamos painéis sólidos, acabamentos rigorosos e métodos de união invisíveis que não cedem com o peso do uso rotineiro.",
        faq_25_q: "Como limpar os acabamentos lacados ou MDF?",
        faq_25_a: "A manutenção é muito simples. Use apenas um pano macio (tipo microfibra) umedecido em água com um pouco de sabão neutro. Nunca utilize esponjas abrasivas ou produtos químicos fortes.",

        contact_subtitle: "Fale Conosco",
        contact_title_text: "Inicie sua",
        contact_title_em: "Transformação",
        contact_desc: "Preencha o formulário abaixo ou entre em contato direto pelo WhatsApp para solicitar seu orçamento.",
        contact_phone_label: "Telefone",
        contact_whatsapp_label: "WhatsApp",
        contact_email_label: "E-mail",
        contact_address_label: "Endereço",
        form_name: "Nome Completo",
        form_phone: "Celular / WhatsApp",
        form_email: "E-mail",
        form_message: "Mensagem / Detalhes adicionais",
        form_furniture_type: "Qual móvel você quer fazer?",
        form_furniture_placeholder: "Selecione uma opção (ex: Cozinha, Guarda-Roupa...)",
        form_opt_cozinha: "Cozinha Planejada",
        form_opt_roupeiro: "Guarda-Roupa",
        form_opt_closet: "Closet",
        form_opt_sala: "Móvel de Sala",
        form_opt_banho: "Móvel de Banheiro",
        form_opt_outro: "Outro",
        form_project_status: "Já tem projeto?",
        form_project_placeholder: "Selecione uma opção",
        form_opt_tem_projeto: "Sim, tenho projeto/medidas",
        form_opt_precisa_projeto: "Não, preciso de projeto",
        form_location: "Cidade / Bairro",
        btn_whatsapp_send: "Enviar pelo WhatsApp",
        btn_submit: "Solicitar Orçamento",
        footer_about: "Especialistas em móveis planejados, unindo design, funcionalidade e qualidade em cada projeto.",
        footer_links_title: "Links Rápidos",
        footer_legal_title: "Legal",
        footer_terms: "Termos e Condições",
        footer_privacy: "Política de Privacidade",
        footer_rights: "Todos os direitos reservados.",
        footer_dev: "Desenvolvido por",
        exit_title: "Ainda tem dúvidas?<br>Nós ajudamos!",
        exit_desc: "Antes de sair, fale com um de nossos especialistas. Receba um atendimento personalizado para encontrar exatamente o que procura, sem compromisso.",
        exit_btn: "FALAR COM UM ESPECIALISTA AGORA"
    },
    en: {
        meta_title: "Custom-Made Furniture in Cascavel PR | Kitchens, Wardrobes | Frota Móveis",
        meta_description: "Custom-made furniture in Cascavel-PR, Brazil. 3D Design, fitted kitchens, wardrobes. Serving Cascavel, Toledo, Foz do Iguaçu and the West Paraná region. Free quote. +55 45 3096-0906",
        nav_home: "Home",
        nav_about: "About",
        nav_services: "Services",
        nav_portfolio: "Transformations",
        nav_contact: "Contact",
        btn_quote: "Request Quote",
        btn_nav_contact: "Contact Us",
        btn_portfolio: "View Portfolio",
        btn_hero_contact: "Talk to Us",
        btn_read_more: "Read More <svg class='fa-icon fa-arrow-right' aria-hidden='true'><use href='#fa-arrow-right'></use></svg>",
        hero_subtitle: "CUSTOM FURNITURE SPECIALISTS",
        hero_title_1: "Transform Your Spaces into",
        hero_title_2: "Personalized",
        hero_title_3: "Works of Art",
        hero_desc: "Custom furniture that unites functionality, design, and quality.<br>Each project is unique, just like your space.",
        exp_number: "25+",
        exp_text: "Years of<br>Experience",
        about_subtitle: "Who We Are",
        about_title_text: "Our",
        about_title_em: "Story",
        about_text_1: "Frota Móveis Planejados was born from the union of two generations passionate about excellence in woodworking. Silo Frota dos Anjos, the founder, built decades of experience in high-end carpentry, establishing a solid reputation in Cascavel and the West of Paraná.",
        about_text_2: "Silas Frota dos Anjos Neto brought innovation, modern management, and technology to the family business, combining traditional craftsmanship with 3D design, premium materials, and efficient processes. Together, they ensure every detail — from the perfect finish to intelligent functionality — exceeds our clients' expectations.",
        about_text_3: "At our workshop in Cascavel-PR, we create unique custom-made furniture projects. With many projects delivered and 100% satisfaction guaranteed, we serve the entire West Paraná region: Cascavel, Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina and neighboring cities. We use MDF from brands Arauco, Duratex, Guararapes and Sudati, plus top-tier hardware (Blum, Häfele) in a fully transparent process: from personalized design to professional installation.",
        stat_1_num: "10+ Years",
        stat_1_desc: "Of Experience",
        stat_2_num: "Many Projects",
        stat_2_desc: "Delivered",
        stat_3_num: "100%",
        stat_3_desc: "Satisfaction",
        services_subtitle: "What We Do",
        services_title_text: "Our",
        services_title_em: "Services",
        srv_1_title: "Custom Furniture",
        srv_1_desc: "Unique pieces designed to the millimeter. We guarantee total utilization and excellent finishes of traditional woodwork.",
        srv_2_title: "Interior Design",
        srv_2_desc: "Complete 3D visualization of your project. We harmonize materials and lighting to unite aesthetics and functionality.",
        srv_3_title: "Custom Wardrobes and Closets",
        srv_3_desc: "Luxury wardrobes and closets with personalized organization. Soft-close drawers and integrated LED for maximum practicality.",
        srv_4_title: "Custom Kitchens",
        srv_4_desc: "Robust kitchens with water-resistant materials and top-tier hardware. We combine resistance and design, from rustic to minimalist.",
        srv_5_title: "Bathroom Furniture",
        srv_5_desc: "Moisture-resistant furniture with sophisticated design. Durable and intelligent solutions for organizing your bathroom.",
        srv_6_title: "Commercial Furniture",
        srv_6_desc: "Counters and office furniture that elevate your brand. Ergonomic solutions designed to impress.",
        port_subtitle: "Our Work",
        port_title_text: "Our",
        port_title_em: "Transformations",
        port_desc: "See our recent projects and be amazed by the results.",
        port_1_title: "3-in-1 Living Room Unit: TV, Fireplace & Bar",
        port_1_desc: "Custom shelving in wood and marble combining entertainment, comfort and sophistication.",
        port_2_title: "Modern Sage Green Kitchen",
        port_2_desc: "Marble island and illuminated slatted panel.",
        port_3_title: "Fitted Wardrobe with Window Area",
        port_3_desc: "Optimized storage solution with central drawers and side doors, perfect for making the most of every centimeter of your space.",
        port_4_title: "Frota Móveis Executive Office",
        port_4_desc: "The perfect balance between technology, comfort and sophistication.",
        port_5_title: "Is your space next?",
        port_5_desc: "Let's turn your vision into reality with the touch of luxury your home deserves.",
        port_5_btn: "SCHEDULE CONSULTATION",
        port_6_title: "Modern Wood and Marble Kitchen",
        port_6_desc: "Get inspired by this sophisticated design that combines custom cabinets, a central island with slatted finish, and the timeless elegance of light coverings.",
        port_7_title: "Modern Home Office with Industrial Touch",
        port_7_desc: "Explore ideas for floating shelves, burnt cement walls, and smart woodwork to optimize your workspace.",
        port_8_title: "Cabinet with Built-in Desk",
        port_8_desc: "Minimalism and functionality in custom woodwork.",
        port_9_title: "Minimalist Floating TV Panel with LED",
        port_9_desc: "The perfect balance between functionality and luxury. Enhance your living room with this contemporary furniture, combining natural textures and decorative niches.",
        port_10_title: "Frota Móveis Wooden Home Theater",
        port_10_desc: "Sophistication with built-in lighting and side niches.",
        port_11_title: "Modern Bedroom with Lighting",
        port_11_desc: "Compact and functional design with integrated headboard.",
        port_12_title: "Slatted Minimalism",
        port_12_desc: "Custom-made sophistication and space optimization.",
        port_13_title: "Minimalist Suspended Cabinet",
        port_13_desc: "Floating design with double sink and premium finish.",
        port_btn_more: "View More Projects",
        port_more_title: "More Transformations",
        badge_before: "BEFORE",
        badge_after: "AFTER",
        process_subtitle: "Methodology",
        process_title_text: "Our",
        process_title_em: "Process",
        process_desc: "",
        proc_1_title: "Consultation",
        proc_1_desc: "Initial meeting to understand your needs, space, and style.",
        proc_2_title: "3D Design",
        proc_2_desc: "Project presentation with realistic renderings for approval.",
        proc_3_title: "Production",
        proc_3_desc: "Meticulous crafting in our workshop with premium materials.",
        proc_4_title: "Installation",
        proc_4_desc: "Final on-site assembly by our specialists.",
        test_subtitle: "Feedback",
        test_title_text: "What Our",
        test_title_em: "Clients",
        test_1_desc: "\"Always trying to understand what was intended, with no difficulty accepting changes/criticism. Delivered exactly what was requested, in less time than expected and always with friendliness and professionalism!!\"",
        test_2_desc: "\"The professional demonstrated excellence, creativity, and dedication to the project. Attentive to details and the client's interests, exceeded all expectations with well-founded proposals and relevant suggestions.\"",
        test_3_desc: "\"Excellent professional. Completed the bedroom project in a weekend with all requested details. Fast, quality work with great availability and patience. Highly recommend.\"",
        test_4_desc: "\"Very well finished furniture of superior quality. Highly recommend. Besides the best customer service we've ever had.\"",
        test_5_desc: "\"Highly recommend! Everything flowed perfectly from the first contact, project, and delivery. High-quality material and service.\"",
        test_6_desc: "\"Super professional, attentive to details and very caring. Highly recommend.\"",
        test_client_label: "Client",
        faq_subtitle: "Common Questions",
        faq_title_text: "Frequently Asked",
        faq_title_em: "Questions",
        faq_cat_1: "Project and Process",
        faq_cat_2: "Budget and Investment",
        faq_cat_3: "Materials and Finishes",
        faq_cat_4: "Installation and Assembly",
        faq_cat_5: "Warranty and Support",
        faq_1_q: "How does the consultation for custom furniture in Cascavel-PR work?",
        faq_1_a: "We start with a free technical visit in Cascavel and the West Paraná region to assess the space, take exact measurements, and understand your design ideas. The goal is to align style, budget, and real needs.",
        faq_2_q: "Do you make 3D projects for premium kitchens and wardrobes?",
        faq_2_a: "Yes. We present a detailed realistic 3D project before production at our workshop in Cascavel-PR. This way, you visualize exactly how the custom furniture will look in your space. We only proceed after your total approval.",
        faq_3_q: "What is the delivery time for high-end furniture?",
        faq_3_a: "The timeframe is based on project complexity. Unique pieces take on average 3 to 5 weeks of production. Complete premium kitchen and closet projects take 6 to 8 weeks, ensuring excellence in rigorous finishes.",
        faq_4_q: "How do you guarantee the perfect fit of custom furniture?",
        faq_4_a: "Through a detailed on-site technical survey in Cascavel and the region. We evaluate unevenness, squaring, and installations, allowing the manufacturing to be 100% custom to your property, with no margins for error.",
        faq_5_q: "Can I change the details after seeing the 3D model?",
        faq_5_a: "Yes. You can adjust finishes, woods, hardware, or interior storage during the 3D review phase. The manufacturing of your luxury pieces only begins when you are completely satisfied with the final project.",
        faq_6_q: "How is the quote for custom furniture prepared?",
        faq_6_a: "Our quotes are fair, detailed, and 100% transparent, with no hidden costs. Every premium material chosen (from lacquer to hinges) is justified in the final proposal presented after project approval.",
        faq_7_q: "Do you serve Toledo, Foz do Iguaçu and other cities in the region?",
        faq_7_a: "Yes. Our workshop is in Cascavel-PR, allowing us to serve the entire West Paraná region: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia and neighboring cities quickly and efficiently with our own installation team.",
        faq_8_q: "What is the investment for a luxury furniture project?",
        faq_8_a: "We do not require minimum values. We handle everything from making a single premium TV unit to the complete carpentry of a villa. The quote adapts to the choices of Scandinavian materials, marble stone, or high-density melamines.",
        faq_9_q: "Are transport and assembly in Greater Lisbon included?",
        faq_9_a: "Yes. All Frota Móveis proposals are delivered on a turnkey basis. Operational costs (careful transport and specialized assembly at your residence) are already integrated into the approved final value.",
        faq_10_q: "Do you guarantee absolute transparency in the final price?",
        faq_10_a: "Yes. The budgeted and invoiced value is exactly what was outlined after closing the specifications (type of hardware, panels, and chosen doors). Any changes of mind always result in a revised quote, with no surprises.",
        faq_11_q: "What premium materials do you use in high-end furniture?",
        faq_11_a: "We do not use ordinary chipboards. Our base is MDF and moisture-resistant MDF from brands Arauco, Duratex, Guararapes and Sudati. This guarantees smooth, matte, or textured fronts immune to premature wear.",
        faq_12_q: "Do you use soft-close hardware in kitchens?",
        faq_12_a: "Soft-close is our mandatory standard. We exclusively use top-of-the-range sliding and magnetic closure systems from world-leading brands (BLUM, Häfele, and Emuca), ensuring durability for millions of silenced openings.",
        faq_13_q: "Do you do premium lacquering and tempered glass panels?",
        faq_13_a: "Yes. Our forte is ultra-matte or high-gloss lacquer with special drying. We execute luxury partitions combining fine aluminum, bronze or smoked glass, and integrated LED lighting for striking closets and kitchens.",
        faq_14_q: "Do you guarantee moisture resistance in bathroom furniture?",
        faq_14_a: "Absolutely. Bathroom and kitchen furniture experience a lot of humidity. Therefore, we design these bases strictly with marine plywood or highly sealed MDF, also using protective aluminum bottoms in the sink area.",
        faq_15_q: "Do you help integrate marble and stone tops in the kitchen?",
        faq_15_a: "We work in partnership with excellent marble workers in the region (Silestone, Dekton, marble, or granite). Frota Móveis structures the base skeleton in an ultra-resistant way in its islands to safely accommodate these heavy stones.",
        faq_16_q: "How do you carry out the technical survey of the space?",
        faq_16_a: "We bring laser technical instrumentation to your house or apartment. We record wall precision and map all outlets, light fixtures, and electrical baseboards before designing and manufacturing the complete built-in pieces.",
        faq_17_q: "Is custom furniture assembly done by Frota Móveis?",
        faq_17_a: "We never delegate assembly to informal third-party teams. The technicians who make the cuts in our Cascavel workshop accompany the assemblies at your home, ensuring precision, rigorous detail, and total care inside.",
        faq_18_q: "Does installing custom furniture cause a lot of rubble and dust?",
        faq_18_a: "Unlike common carpenters, we minimize this. The bulk of manufacturing occurs at our facilities. Up to 95% of the cabinet or kitchen arrives at your home already folded, lacquered, drilled, and clean. On-site, there is only quiet, clean calibration alignment.",
        faq_19_q: "How do you protect the sensitive home environment during assembly?",
        faq_19_a: "We protect the walkways of your furniture by covering rich wooden boards and floors with dense insulating blankets and Teflon. The entire flow of large panels through your living room and bedroom is extremely cautious, avoiding scraping walls or door frames.",
        faq_20_q: "Does the space need to be empty for the team to start assembly?",
        faq_20_a: "Yes, we advise that the specific area of the kitchen or built-in wardrobe be free and organized for ample team access when using drill drivers and precise rulers. At the end of assembly, we guarantee maximum vacuuming and final cleaning inside doors and panels.",
        faq_21_q: "What is the warranty for your premium furniture and kitchens?",
        faq_21_a: "We offer a 3-year warranty on all custom carpentry and wardrobe projects. We use excellent raw materials that prevent structural defects and guarantee long durability.",
        faq_22_q: "Do you have after-sales service in Cascavel and the region?",
        faq_22_a: "Yes. We provide direct and fast technical assistance to all our clients in Cascavel and West Paraná. If there's any issue, we will go to the site to resolve it.",
        faq_23_q: "What happens if doors or drawers go out of tune?",
        faq_23_a: "Wood and hinges may undergo slight natural adjustments in the first year. Simply contact Frota Móveis, and our technical team will quickly calibrate the European hardware (BLUM/Häfele) at no extra cost.",
        faq_24_q: "What is the lifespan of a high-end kitchen or closet?",
        faq_24_a: "The luxury furniture manufactured by Frota Móveisis designed to last decades. We use solid panels, rigorous lacquering, and invisible joint methods that do not yield under routine weight.",
        faq_25_q: "How to clean lacquered finishes or melamines?",
        faq_25_a: "Maintenance is very simple. Use only a soft cloth (like microfiber) dampened in water with a little neutral soap. Never use aggressive scrubbers or strong abrasive chemicals.",

        contact_subtitle: "Talk to Us",
        contact_title_text: "Start Your",
        contact_title_em: "Transformation",
        contact_desc: "Fill out the form below or contact us directly via WhatsApp to request your quote.",
        contact_phone_label: "Phone",
        contact_whatsapp_label: "WhatsApp",
        contact_email_label: "Email",
        contact_address_label: "Address",
        form_name: "Full Name",
        form_phone: "Mobile Phone",
        form_email: "Email",
        form_message: "Message / Additional details",
        form_furniture_type: "What furniture do you want to make?",
        form_furniture_placeholder: "Select an option (e.g. Kitchen, Wardrobe...)",
        form_opt_cozinha: "Kitchen",
        form_opt_roupeiro: "Wardrobe",
        form_opt_closet: "Closet",
        form_opt_sala: "Living Room Unit",
        form_opt_banho: "Bathroom Furniture",
        form_opt_outro: "Other",
        form_project_status: "Do you already have a project?",
        form_project_placeholder: "Select an option",
        form_opt_tem_projeto: "Yes, I have a project/measurements",
        form_opt_precisa_projeto: "No, I need a project",
        form_location: "Installation location",
        btn_whatsapp_send: "Send Summary",
        btn_submit: "Request Contact",
        footer_about: "Experts in custom furniture, combining design, functionality, and comfort in every project.",
        footer_links_title: "Quick Links",
        footer_legal_title: "Legal",
        footer_terms: "Terms and Conditions",
        footer_privacy: "Privacy Policy",
        footer_rights: "All rights reserved.",
        footer_dev: "Developed by",
        exit_title: "Still have questions?<br>We can help!",
        exit_desc: "Before you leave, talk to one of our specialists. Get personalized assistance to find exactly what you're looking for, with no obligation.",
        exit_btn: "TALK TO A SPECIALIST NOW"
    },
    es: {
        meta_title: "Muebles Planeados a Medida en Cascavel PR | Cocinas, Armarios | Frota Móveis",
        meta_description: "Muebles planeados a medida en Cascavel-PR, Brasil. Diseño 3D, cocinas planeadas, armarios premium. Atendemos Cascavel, Toledo, Foz do Iguaçu y región. Presupuesto gratis. +55 45 3096-0906",
        nav_home: "Inicio",
        nav_about: "Nosotros",
        nav_services: "Servicios",
        nav_portfolio: "Transformaciones",
        nav_contact: "Contacto",
        btn_quote: "Pedir Presupuesto",
        btn_nav_contact: "Contáctenos",
        btn_portfolio: "Ver Portafolio",
        btn_hero_contact: "Hable Con Nosotros",
        btn_read_more: "Leer Más <svg class='fa-icon fa-arrow-right' aria-hidden='true'><use href='#fa-arrow-right'></use></svg>",
        hero_subtitle: "ESPECIALISTAS EN MUEBLES A MEDIDA",
        hero_title_1: "Transforme Sus Espacios en",
        hero_title_2: "Obras de Arte",
        hero_title_3: "Personalizadas",
        hero_desc: "Muebles a medida que unen funcionalidad, diseño y calidad.<br>Cada proyecto es único, al igual que su espacio.",
        exp_number: "25+",
        exp_text: "Años de<br>Experiencia",
        about_subtitle: "Quiénes Somos",
        about_title_text: "Nuestra",
        about_title_em: "Historia",
        about_text_1: "Frota Móveis Planejados nació de la unión de dos generaciones apasionadas por la carpintería de excelencia. Silo Frota dos Anjos, el fundador, construyó décadas de experiencia en muebles de alto nivel, estableciendo una sólida reputación en Cascavel y el oeste de Paraná.",
        about_text_2: "Silas Frota dos Anjos Neto aportó innovación, gestión moderna y tecnología al negocio familiar, combinando la tradición artesanal con diseño 3D y materiales de primera línea. Juntos, garantizan que cada detalle supere las expectativas de nuestros clientes.",
        about_text_3: "En nuestro taller en Cascavel (Paraná, Brasil), creamos proyectos únicos de carpintería especializada. Con muchos proyectos entregados y máxima aprobación garantizada, operamos en toda la región oeste de Paraná: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia y ciudades vecinas. Utilizamos MDF de las marcas Arauco, Duratex, Guararapes y Sudati, más herrajes de primer nivel (Blum, Häfele) en un proceso 100% transparente: desde el diseño personalizado hasta la instalación profesional. Aseguramos una inversión segura, duradera y con soporte completo.",
        stat_1_num: "10+ Años",
        stat_1_desc: "De Experiencia",
        stat_2_num: "Muchos Proyectos",
        stat_2_desc: "Entregados",
        stat_3_num: "100%",
        stat_3_desc: "Satisfacción",
        services_subtitle: "Lo Que Hacemos",
        services_title_text: "Nuestros",
        services_title_em: "Servicios",
        srv_1_title: "Muebles a Medida",
        srv_1_desc: "Piezas únicas diseñadas al milímetro. Garantizamos aprovechamiento total y excelentes acabados de carpintería tradicional.",
        srv_2_title: "Diseño de Interiores",
        srv_2_desc: "Visualización 3D completa de su proyecto. Armonizamos materiales e iluminación para unir estética y funcionalidad.",
        srv_3_title: "Armarios y Vestidores a Medida",
        srv_3_desc: "Armarios y vestidores de lujo con organización personalizada. Cajones con cierre suave y LED integrado para máxima practicidad.",
        srv_4_title: "Cocinas a Medida",
        srv_4_desc: "Cocinas robustas con materiales hidrófugos y herrajes de primera. Unimos resistencia y diseño, del rústico al minimalista.",
        srv_5_title: "Muebles de Baño",
        srv_5_desc: "Muebles resistentes a la humedad con diseño sofisticado. Soluciones duraderas e inteligentes para organizar su baño.",
        srv_6_title: "Mobiliario Comercial",
        srv_6_desc: "Mostradores y muebles de oficina que elevan su marca. Soluciones ergonómicas diseñadas para impresionar.",
        port_subtitle: "Nuestro Trabajo",
        port_title_text: "Nuestras",
        port_title_em: "Transformaciones",
        port_desc: "Vea nuestros proyectos recientes y sorpréndase con los resultados.",
        port_1_title: "Mueble de Salón 3-en-1: TV, Chimenea y Bar",
        port_1_desc: "Estantería a medida en madera y mármol que une entretenimiento, confort y sofisticación.",
        port_2_title: "Cocina Moderna Verde Salvia",
        port_2_desc: "Isla de mármol y panel listado iluminado.",
        port_3_title: "Armario Planificado con Área de Ventana",
        port_3_desc: "Solución de almacenamiento optimizada con cajones centrales y puertas laterales, perfecta para aprovechar cada centímetro de su espacio.",
        port_4_title: "Oficina Ejecutiva Planificada",
        port_4_desc: "El equilibrio perfecto entre tecnología, confort y sofisticación.",
        port_5_title: "¿Es su espacio el siguiente?",
        port_5_desc: "Transformemos su visión en realidad con el toque de lujo que su hogar merece.",
        port_5_btn: "PROGRAMAR CONSULTORÍA",
        port_6_title: "Cocina Moderna en Madera y Mármol",
        port_6_desc: "Inspírese con este diseño sofisticado que une gabinetes planeados, una isla central con acabado listado y la elegancia atemporal de los revestimientos claros.",
        port_7_title: "Home Office Moderno con Toque Industrial",
        port_7_desc: "Explore ideas para estantes suspendidos, paredes de cemento quemado y carpintería inteligente para optimizar su espacio de trabajo.",
        port_8_title: "Armario con Escritorio Incorporado",
        port_8_desc: "Minimalismo y funcionalidad en carpintería a medida.",
        port_9_title: "Panel de TV Suspendido Minimalista con LED",
        port_9_desc: "El equilibrio perfecto entre funcionalidad y lujo. Enriquece tu sala de estar con este mueble contemporáneo, que combina texturas naturales y nichos decorativos.",
        port_10_title: "Home Theater Planificado de Madera",
        port_10_desc: "Sofisticación con iluminación empotrada y nichos laterales.",
        port_11_title: "Dormitorio Moderno con Iluminación",
        port_11_desc: "Diseño compacto y funcional con cabecera integrada.",
        port_12_title: "Minimalismo Listado",
        port_12_desc: "Sofisticación y optimización de espacio a medida.",
        port_13_title: "Gabinete Suspendido Minimalista",
        port_13_desc: "Diseño flotante con doble lavabo y acabado premium.",
        port_btn_more: "Ver Más Proyectos",
        port_more_title: "Más Transformaciones",
        badge_before: "ANTES",
        badge_after: "DESPUÉS",
        process_subtitle: "Metodología",
        process_title_text: "Nuestro",
        process_title_em: "Proceso",
        process_desc: "",
        proc_1_title: "Consultoría",
        proc_1_desc: "Reunión inicial para entender sus necesidades, espacio y estilo.",
        proc_2_title: "Diseño 3D",
        proc_2_desc: "Presentación del proyecto en renderizaciones realistas para aprobación.",
        proc_3_title: "Producción",
        proc_3_desc: "Fabricación meticulosa en nuestro taller con materiales premium.",
        proc_4_title: "Instalación",
        proc_4_desc: "Montaje final en el lugar realizado por nuestros especialistas.",
        test_subtitle: "Comentarios",
        test_title_text: "Lo Que Dicen Nuestros",
        test_title_em: "Clientes",
        test_1_desc: "\"Siempre intentando entender lo que se pretendía, sin dificultad para aceptar cambios/críticas. Entregó exactamente lo pedido, en menos tiempo de lo previsto y siempre con simpatía y profesionalidad!!\"",
        test_2_desc: "\"El profesional demostró excelencia, creatividad y dedicación al proyecto. Atento a los detalles y a los intereses del cliente, superó todas las expectativas con propuestas bien fundamentadas y sugerencias pertinentes.\"",
        test_3_desc: "\"Excelente profesional. Completó el proyecto del dormitorio en un fin de semana con todos los detalles solicitados. Trabajo rápido y de calidad, con gran disponibilidad y paciencia. Lo recomiendo.\"",
        test_4_desc: "\"Muebles muy bien terminados y de calidad superior. Lo recomiendo mucho. Además de la mejor atención que hemos recibido.\"",
        test_5_desc: "\"¡Lo recomiendo mucho! Todo fluyó de la mejor manera desde el primer contacto, proyecto y entrega. Material y servicio de mucha calidad.\"",
        test_6_desc: "\"Súper profesionales, atentos a los detalles y muy cuidadosos. Lo recomiendo.\"",
        test_client_label: "Cliente",
        faq_subtitle: "Dudas Comunes",
        faq_title_text: "Preguntas",
        faq_title_em: "Frecuentes",
        faq_cat_1: "Proyecto y Proceso",
        faq_cat_2: "Presupuesto e Inversión",
        faq_cat_3: "Materiales y Acabados",
        faq_cat_4: "Instalación y Montaje",
        faq_cat_5: "Garantía y Soporte",
        faq_1_q: "¿Cómo funciona la consulta para muebles planeados en Cascavel-PR?",
        faq_1_a: "Comenzamos con una visita técnica gratuita en Cascavel y la región oeste de Paraná para evaluar el espacio, tomar medidas exactas y entender sus ideas de diseño. El objetivo es alinear estilo, presupuesto y necesidades reales.",
        faq_2_q: "¿Hacen proyectos 3D para cocinas y armarios premium?",
        faq_2_a: "Sí. Presentamos un proyecto 3D realista detallado antes de la producción en nuestro taller en Cascavel-PR. Así visualiza exactamente cómo quedará el mueble planeado en su espacio. Solo avanzamos tras su aprobación total.",
        faq_3_q: "¿Cuál es el plazo de entrega para muebles de alto standing?",
        faq_3_a: "El plazo se basa en la complejidad del proyecto. Piezas únicas llevan en promedio 3 a 5 semanas de producción. Proyectos completos de cocinas premium y vestidores tardan de 6 a 8 semanas, garantizando la excelencia en acabados rigurosos.",
        faq_4_q: "¿Cómo garantizan el encaje perfecto de los muebles a medida?",
        faq_4_a: "A través de un levantamiento técnico detallado en Cascavel y la región. Evaluamos desniveles, escuadras e instalaciones, permitiendo que la fabricación sea 100% a medida de su inmueble, sin márgenes de error.",
        faq_5_q: "¿Puedo cambiar los detalles tras ver el modelo 3D?",
        faq_5_a: "Sí. Puede ajustar acabamentos, maderas, herrajes o almacenaje interior durante la fase de revisión del 3D. La fabricación de sus piezas de lujo solo inicia cuando esté totalmente satisfecho con el proyecto final.",
        faq_6_q: "¿Cómo se elabora el presupuesto para muebles a medida?",
        faq_6_a: "Nuestros presupuestos son justos, detallados y 100% transparentes, sin costes ocultos. Cada material premium elegido (del lacado a la bisagra) se justifica en la propuesta final presentada tras la aprobación del proyecto.",
        faq_7_q: "¿Atienden en Toledo, Foz do Iguaçu y otras ciudades de la región?",
        faq_7_a: "Sí. Nuestro taller está en Cascavel-PR, lo que nos permite atender con rapidez toda la región oeste de Paraná: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia y ciudades vecinas.",
        faq_8_q: "¿Cuál es la inversión en un proyecto de mobiliario de lujo?",
        faq_8_a: "No exigimos valores mínimos. Atendemos desde la fabricación de un solo mueble de TV premium hasta la carpintería integral de un chalet. El presupuesto se adapta a las elecciones de materiales escandinavos, piedra mármol o MDF lacado premium.",
        faq_9_q: "¿El transporte y el montaje están incluidos en el presupuesto?",
        faq_9_a: "Sí. Todas las propuestas de Frota Móveis se entregan llave en mano. Los costes operativos (transporte cauteloso y montaje especializado en su residencia) ya están integrados en el valor final aprobado.",
        faq_10_q: "¿Garantizan transparencia absoluta en el precio final?",
        faq_10_a: "Sí. El valor presupuestado y facturado es exactamente el delineado tras el cierre de los pliegos de condiciones (tipo de herrajes, paneles y puertas elegidos). Cualquier cambio de opinión siempre da lugar a un presupuesto revisado, sin sorpresas.",
        faq_11_q: "¿Qué materiales de excelencia usan en los muebles de alto standing?",
        faq_11_a: "No usamos aglomerados vulgares. Nuestra base es MDF hidrófugo (resistente a la humedad) o MDF das marcas Arauco, Duratex, Guararapes e Sudati. Esto garantiza frentes lisos, mates o texturizados inmunes al desgaste prematuro.",
        faq_12_q: "¿Usan herrajes de cierre suave (soft-close) en las cocinas?",
        faq_12_a: "El soft-close es nuestro estándar obligatorio. Empleamos exclusivamente sistemas de deslizamiento y cierre magnético de alta gama de marcas líderes mundiales (BLUM, Häfele y Emuca), asegurando durabilidad para millones de aperturas silenciadas.",
        faq_13_q: "¿Hacen lacado premium y paneles en cristal templado?",
        faq_13_a: "Sí. Nuestro fuerte es el lacado ultra mate o alto brillo con secado especial. Ejecutamos divisorias de lujo conjugando aluminio fino, cristal bronce o ahumado e iluminación LED integrada para vestidores y cocinas impactantes.",
        faq_14_q: "¿Garantizan la resistencia a la humedad en los muebles de baño?",
        faq_14_a: "Absolutamente. El mobiliario de aseo y cocina sufre bastante humedad. Por ello, concebimos estas bases estrictamente con contrachapado marino naval o MDF muy sellado, usando además fondos protectores de aluminio en la zona del fregadero.",
        faq_15_q: "¿Ayudan en la integración de encimeras de mármol y piedra en la cocina?",
        faq_15_a: "Trabajamos en colaboración con excelentes marmolistas de la región (Silestone, Dekton, mármol o granito). Frota Móveis estructura el esqueleto base de forma ultra resistente en sus islas para acomodar estas piedras pesadas con seguridad.",
        faq_16_q: "¿Cómo realizan el relevamiento técnico del espacio?",
        faq_16_a: "Llevamos la instrumentación técnica láser a su chalet o apartamento. Registramos la precisión de las paredes y mapeamos todas las salidas de enchufes, focos de luz y rodapiés eléctricos antes de diseñar y fabricar las piezas de encastre completas.",
        faq_17_q: "¿El montaje de los muebles a medida lo hace Frota Móveis?",
        faq_17_a: "Nunca delegamos el montaje a equipos terceros informales. Los técnicos que efectúan los cortes en nuestro taller en Cascavel acompañan los montajes en su domicilio, asegurando precisión, rigor al detalle y total cuidado.",
        faq_18_q: "¿La instalación de muebles a medida genera mucho escombro y polvo?",
        faq_18_a: "Al contrario de las carpinterías comunes, minimizamos esto. El grueso fabril ocurre en nuestras instalaciones. Hasta el 95% del armario o cocina llega a su casa ya plegado, lacado, taladrado y limpio. En el lugar solo existe alineación de calibración silencioso y limpio.",
        faq_19_q: "¿Cómo protegen el ambiente sensible de la casa en el montaje?",
        faq_19_a: "Protegemos los pasillos de su mobiliario revistiendo tablones y pavimentos ricos en madera con densas mantas aisladoras y teflón. Todo el flujo de grandes paneles por su salón y dormitorio es extremadamente cauteloso evitando raspaduras en paredes o topes de puerta.",
        faq_20_q: "¿El espacio necesita estar vacío para que el equipo inicie el montaje?",
        faq_20_a: "Sí, aconsejamos que el área específica de la cocina o del armario empotrado quede libre y organizada para un acceso amplio del equipo en el uso de atornilladoras y reglas precisas. Al final del montaje, garantizamos la máxima aspiración y limpieza final del interior de puertas y paneles.",
        faq_21_q: "¿Cuál es la garantía de sus muebles premium y cocinas?",
        faq_21_a: "Ofrecemos 3 años de garantía en todos los proyectos de carpintería y armarios a medida. Utilizamos materias primas de excelencia que previenen defectos estructurales y garantizan una larga durabilidad.",
        faq_22_q: "¿Tienen servicio posventa en Cascavel y la región?",
        faq_22_a: "Sí. Brindamos asistencia técnica directa y rápida a todos nuestros clientes en Cascavel y el oeste de Paraná. Si hay algún problema, nos desplazamos al lugar para resolverlo.",
        faq_23_q: "¿Qué sucede si las puertas o cajones se desafinan?",
        faq_23_a: "La madera y las bisagras pueden sufrir ligeros ajustes naturales en el primer año. Simplemente contacte a Frota Móveis y nuestro equipo técnico realizará la calibración rápida de los herrajes europeos (BLUM/Häfele) sin coste adicional.",
        faq_24_q: "¿Cuál es la vida útil de una cocina o vestidor de alto standing?",
        faq_24_a: "Los muebles de lujo fabricados por Frota Móveis están diseñados para durar décadas. Usamos paneles macizos, lacados rigurosos y métodos de unión invisibles que no ceden con el peso rutinario.",
        faq_25_q: "¿Cómo limpiar los acabados lacados o MDF?",
        faq_25_a: "El mantenimiento es muy simple. Use solo un paño suave (tipo microfibra) humedecido en agua con un poco de jabón neutro. Nunca utilice estropajos agresivos o productos químicos abrasivos fuertes.",

        contact_subtitle: "Hable Con Nosotros",
        contact_title_text: "Inicie su",
        contact_title_em: "Transformación",
        contact_desc: "Complete el formulario a continuación o contáctenos directamente a través de WhatsApp para solicitar su presupuesto.",
        contact_phone_label: "Teléfono",
        contact_whatsapp_label: "WhatsApp",
        contact_email_label: "Correo",
        contact_address_label: "Dirección",
        form_name: "Nombre Completo",
        form_phone: "Móvil",
        form_email: "Correo Electrónico",
        form_message: "Mensaje / Detalles adicionales",
        form_furniture_type: "¿Qué mueble desea hacer?",
        form_furniture_placeholder: "Seleccione una opción (ej: Cocina, Armario...)",
        form_opt_cozinha: "Cocina",
        form_opt_roupeiro: "Armario",
        form_opt_closet: "Vestidor",
        form_opt_sala: "Mueble de Salón",
        form_opt_banho: "Mueble de Baño",
        form_opt_outro: "Otro",
        form_project_status: "¿Ya tiene un proyecto?",
        form_project_placeholder: "Seleccione una opción",
        form_opt_tem_projeto: "Sí, tengo un proyecto/medidas",
        form_opt_precisa_projeto: "No, necesito un proyecto",
        form_location: "Lugar de instalación",
        btn_whatsapp_send: "Enviar Resumen",
        btn_submit: "Solicitar Contacto",
        footer_about: "Expertos en muebles a medida, combinando diseño, funcionalidad y confort en cada proyecto.",
        footer_links_title: "Enlaces Rápidos",
        footer_legal_title: "Legal",
        footer_terms: "Términos y Condiciones",
        footer_privacy: "Política de Privacidad",
        footer_rights: "Todos los derechos reservados.",
        footer_dev: "Desenvolvido por",
        exit_title: "¿Aún tiene dudas?<br>¡Le ayudamos!",
        exit_desc: "Antes de irse, hable con uno de nuestros especialistas. Reciba atención personalizada para encontrar exactamente lo que busca, sin compromiso.",
        exit_btn: "HABLAR CON UN ESPECIALISTA AHORA"
    },
    fr: {
        meta_title: "Meubles sur Mesure à Cascavel-PR | Cuisines, Armoires Premium | Frota Móveis",
        meta_description: "Meubles sur mesure de luxe à Cascavel-PR et dans l'ouest du Paraná. Atelier propre à Cascavel. Design 3D, cuisines sur mesure, armoires premium. Consultation gratuite. +55 45 3096-0906",
        nav_home: "Accueil",
        nav_about: "À Propos",
        nav_services: "Services",
        nav_portfolio: "Transformations",
        nav_contact: "Contact",
        btn_quote: "Demander Devis",
        btn_nav_contact: "Contactez-nous",
        btn_portfolio: "Voir Portfolio",
        btn_hero_contact: "Parlez-nous",
        btn_read_more: "Lire Plus <svg class='fa-icon fa-arrow-right' aria-hidden='true'><use href='#fa-arrow-right'></use></svg>",
        hero_subtitle: "SPÉCIALISTES DU MOBILIER SUR MESURE",
        hero_title_1: "Transformez Vos Espaces en",
        hero_title_2: "Œuvres d'Art",
        hero_title_3: "Personnalisées",
        hero_desc: "Des meubles sur mesure qui allient fonctionnalité, design et qualité.<br>Chaque projet est unique, tout comme votre espace.",
        exp_number: "25+",
        exp_text: "Années<br>d'Expérience",
        about_subtitle: "Qui Sommes-Nous",
        about_title_text: "Notre",
        about_title_em: "Histoire",
        about_text_1: "Frota Móveis Planejados est née de l'union de deux générations passionnées par l'excellence en menuiserie. Silo Frota dos Anjos, le fondateur, a construit des décennies d'expérience dans les meubles haut de gamme, établissant une solide réputation à Cascavel et dans l'ouest du Paraná.",
        about_text_2: "Silas Frota dos Anjos Neto a apporté l'innovation, la gestion moderne et la technologie à l'entreprise familiale, combinant l'artisanat traditionnel avec le design 3D et des matériaux de premier ordre. Ensemble, ils garantissent que chaque détail dépasse les attentes de nos clients.",
        about_text_3: "Dans notre atelier à Cascavel (Paraná, Brésil), nous créons des projets uniques de menuiserie spécialisée. Avec de nombreux projets livrés et une approbation maximale garantie, nous opérons dans toute la région ouest du Paraná : Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia et les villes voisines. Nous utilisons du MDF des marques Arauco, Duratex, Guararapes et Sudati, plus une quincaillerie de pointe (Blum, Häfele) dans un processus 100 % transparent : du design personnalisé à l'installation professionnelle. Nous assurons un investissement sûr, durable et avec un support complet.",
        stat_1_num: "+25 Ans",
        stat_1_desc: "D'Expérience",
        stat_2_num: "Nombreux Projets",
        stat_2_desc: "Livrés",
        stat_3_num: "100%",
        stat_3_desc: "Satisfaction",
        services_subtitle: "Ce Que Nous Faisons",
        services_title_text: "Nos",
        services_title_em: "Services",
        srv_1_title: "Meubles sur Mesure",
        srv_1_desc: "Des pièces uniques conçues au millimètre. Nous garantissons une utilisation totale et des finitions excellentes de la menuiserie traditionnelle.",
        srv_2_title: "Design d'Intérieur",
        srv_2_desc: "Visualisation 3D complète de votre projet. Nous harmonisons les matériaux et l'éclairage pour unir esthétique et fonctionnalité.",
        srv_3_title: "Armoires et Dressings sur Mesure",
        srv_3_desc: "Armoires et dressings de luxe avec organisation personnalisée. Tiroirs à fermeture douce et LED intégrée pour une praticité maximale.",
        srv_4_title: "Cuisines sur Mesure",
        srv_4_desc: "Cuisines robustes avec des matériaux hydrofuges et une quincaillerie de pointe. Nous allions résistance et design, du rustique au minimaliste.",
        srv_5_title: "Meubles de Salle de Bain",
        srv_5_desc: "Meubles résistants à l'humidité au design sophistiqué. Des solutions durables et intelligentes pour l'organisation de votre salle de bain.",
        srv_6_title: "Mobilier Commercial",
        srv_6_desc: "Comptoirs et mobilier de bureau qui mettent en valeur votre marque. Des solutions ergonomiques conçues pour impressionner.",
        port_subtitle: "Notre Travail",
        port_title_text: "Nos",
        port_title_em: "Transformations",
        port_desc: "Découvrez nos récents projets et laissez-vous surprendre par les résultats.",
        port_1_title: "Meuble de Salon 3-en-1 : TV, Cheminée et Bar",
        port_1_desc: "Étagère sur mesure en bois et marbre alliant divertissement, confort et sophistication.",
        port_2_title: "Cuisine Moderne Vert Sauge",
        port_2_desc: "Îlot en marbre et panneau à lattes éclairé.",
        port_3_title: "Armoire Aménagée avec Espace Fenêtre",
        port_3_desc: "Solution de rangement optimisée avec tiroirs centraux et portes latérales, parfaite pour tirer parti de chaque centimètre de votre espace.",
        port_4_title: "Bureau Exécutif Aménagé",
        port_4_desc: "L’équilibre parfait entre technologie, confort et sophistication.",
        port_5_title: "Votre espace est-il le prochain ?",
        port_5_desc: "Transformons votre vision en réalité avec la touche de luxe que votre maison mérite.",
        port_5_btn: "PLANIFIER UNE CONSULTATION",
        port_6_title: "Cuisine Moderne en Bois et Marbre",
        port_6_desc: "Laissez-vous inspirer par ce design sophistiqué qui allie des armoires aménagées, un îlot central avec une finition à lattes et l'élégance intemporelle des revêtements clairs.",
        port_7_title: "Bureau à Domicile Moderne avec Touche Industrielle",
        port_7_desc: "Découvrez des idées d'étagères suspendues, de murs en ciment brûlé et de menuiserie intelligente pour optimiser votre espace de travail.",
        port_8_title: "Armoire avec Bureau Intégré",
        port_8_desc: "Minimalisme et fonctionnalité en menuiserie sur mesure.",
        port_9_title: "Panneau TV Suspendu Minimaliste avec LED",
        port_9_desc: "L'équilibre parfait entre fonctionnalité et luxe. Valorisez votre salon avec ce meuble contemporain, alliant textures naturelles et niches décoratives.",
        port_10_title: "Home Cinéma Planifié en Bois",
        port_10_desc: "Sophistication avec éclairage intégré et niches latérales.",
        port_11_title: "Chambre Moderne avec Éclairage",
        port_11_desc: "Design compact et fonctionnel avec tête de lit intégrée.",
        port_12_title: "Minimalisme à Lattes",
        port_12_desc: "Sophistication et optimisation d'espace sur mesure.",
        port_13_title: "Meuble Suspendu Minimaliste",
        port_13_desc: "Design flottant avec double vasque et finition premium.",
        port_btn_more: "Voir Plus De Projets",
        port_more_title: "Plus De Transformations",
        badge_before: "AVANT",
        badge_after: "APRÈS",
        process_subtitle: "Méthodologie",
        process_title_text: "Notre",
        process_title_em: "Processus",
        process_desc: "",
        proc_1_title: "Consultation",
        proc_1_desc: "Réunion initiale pour comprendre vos besoins, votre espace et votre style.",
        proc_2_title: "Design 3D",
        proc_2_desc: "Présentation du projet en rendus réalistes pour approbation.",
        proc_3_title: "Production",
        proc_3_desc: "Fabrication méticuleuse dans notre atelier avec des matériaux premium.",
        proc_4_title: "Installation",
        proc_4_desc: "Montage final sur site réalisé par nos spécialistes.",
        test_subtitle: "Avis",
        test_title_text: "Ce Que Disent Nos",
        test_title_em: "Clients",
        test_1_desc: "\"Toujours à essayer de comprendre ce qui était voulu, sans difficulté à accepter les changements/critiques. A livré exactement ce qui était demandé, en moins de temps que prévu et toujours avec sympathie et professionnalisme !!\"",
        test_2_desc: "\"Le professionnel a fait preuve d'excellence, de créativité et de dévouement au projet. Attentif aux détails et aux intérêts du client, a dépassé toutes les attentes avec des propositions bien fondées et des suggestions pertinentes.\"",
        test_3_desc: "\"Excellent professionnel. A terminé le projet de la chambre en un week-end avec tous les détails demandés. Travail rapide et de qualité, avec une grande disponibilité et patience. Je recommande.\"",
        test_4_desc: "\"Meubles très bien finis et de qualité supérieure. Je recommande vivement. En plus du meilleur service client que nous ayons jamais eu.\"",
        test_5_desc: "\"Je recommande vivement ! Tout s'est parfaitement déroulé dès le premier contact, le projet et la livraison. Matériel et service de très haute qualité.\"",
        test_6_desc: "\"Super professionnels, attentifs aux détails et très attentionnés. Je recommande.\"",
        test_client_label: "Client",
        faq_subtitle: "Questions Courantes",
        faq_title_text: "Questions",
        faq_title_em: "Fréquentes",
        faq_cat_1: "Projet et Processus",
        faq_cat_2: "Budget et Investissement",
        faq_cat_3: "Matériaux et Finitions",
        faq_cat_4: "Installation et Assemblage",
        faq_cat_5: "Garantie et Support",
        faq_1_q: "Comment fonctionne la consultation pour des meubles sur mesure à Cascavel-PR ?",
        faq_1_a: "Nous commençons par une visite technique gratuite dans la région (Cascavel, Toledo, Foz do Iguaçu, Marechal Cândido Rondon) pour évaluer l'espace, prendre des mesures exactes et discuter de vos idées de design premium. L'objectif est d'aligner le style, le budget et les besoins réels.",
        faq_2_q: "Faites-vous des projets 3D pour les cuisines et dressings premium ?",
        faq_2_a: "Oui. Nous présentons un projet 3D réaliste détaillé avant la production dans notre atelier à Cascavel-PR. De cette façon, vous visualisez exactement comment le mobilier haut de gamme s'intégrera dans votre espace. Nous n'avançons qu'après votre approbation totale.",
        faq_3_q: "Quel est le délai de livraison pour des meubles haut de gamme ?",
        faq_3_a: "Le délai dépend de la complexité du projet. Les pièces uniques nécessitent en moyenne 3 à 5 semaines de production. Les rénovations complètes de cuisines premium et de dressings prennent de 6 à 8 semaines, garantissant l'excellence des finitions rigoureuses.",
        faq_4_q: "Comment garantissez-vous l'ajustement parfait des meubles sur mesure ?",
        faq_4_a: "Grâce à un relevé technique exhaustif sur place (Cascavel et région ouest du Paraná). Nous évaluons les dénivelés, l'équerrage et la plomberie, ce qui permet une fabrication 100 % sur mesure pour votre propriété, sans aucune marge d'erreur.",
        faq_5_q: "Puis-je modifier les détails après avoir vu le modèle 3D ?",
        faq_5_a: "Oui. Vous pouvez ajuster les finitions, les bois, la quincaillerie ou le rangement intérieur pendant la phase de révision 3D. La fabrication de vos pièces de luxe ne commence que lorsque vous êtes totalement satisfait du projet final.",
        faq_6_q: "Comment est élaboré le devis pour des meubles sur mesure ?",
        faq_6_a: "Nos devis sont justes, détaillés et 100 % transparents, sans frais cachés. Chaque matériau premium choisi (de la laque à la charnière) est justifié dans la proposition finale présentée après l'approbation du projet.",
        faq_7_q: "Réalisez-vous des projets à Toledo, Foz do Iguaçu et d'autres villes de la région ?",
        faq_7_a: "Oui. Notre atelier est à Cascavel-PR, ce qui nous permet de desservir rapidement toute la région ouest du Paraná : Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia et les villes voisines.",
        faq_8_q: "Quel est l'investissement pour un projet de mobilier de luxe ?",
        faq_8_a: "Nous n'exigeons pas de valeurs minimales. Nous prenons en charge de la fabrication d'un seul meuble TV premium à la menuiserie complète d'une villa. Le devis s'adapte aux choix des matériaux scandinaves, de la pierre marbrière ou des mélaminés à haute densité.",
        faq_9_q: "Le transport et le montage sont-ils inclus dans le devis ?",
        faq_9_a: "Oui. Toutes les propositions de Frota Móveis sont livrées clés en main. Les coûts opérationnels (transport soigné et montage spécialisé à votre domicile) sont déjà intégrés dans la valeur finale approuvée.",
        faq_10_q: "Garantissez-vous une transparence absolue sur le prix final ?",
        faq_10_a: "Oui. La valeur budgétée et facturée est exactement celle décrite après la clôture du cahier des charges (type de quincaillerie, de panneaux et de portes choisis). Tout changement d'avis entraîne toujours un devis révisé, sans mauvaise surprise.",
        faq_11_q: "Quels matériaux d'excellence utilisez-vous dans les meubles haut de gamme ?",
        faq_11_a: "Nous n'utilisons pas d'agglomérés ordinaires. Notre base est le MDF et MDF hydrofuge des marques Arauco, Duratex, Guararapes et Sudati. Cela garantit des façades lisses, mates ou texturées à l'abri de l'usure prématurée.",
        faq_12_q: "Utilisez-vous de la quincaillerie à fermeture douce (soft-close) dans les cuisines ?",
        faq_12_a: "Le soft-close est notre norme obligatoire. Nous employons exclusivement des systèmes de coulissement et de fermeture magnétique haut de gamme de marques mondiales de premier plan (BLUM, Häfele et Emuca), assurant une durabilité pour des millions d'ouvertures silencieuses.",
        faq_13_q: "Faites-vous du laquage premium et des panneaux en verre trempé ?",
        faq_13_a: "Oui. Notre force est la laque ultra-mate ou très brillante avec séchage spécial. Nous réalisons des cloisons de luxe alliant aluminium fin, verre bronze ou fumé et éclairage LED intégré pour des dressings et des cuisines spectaculaires.",
        faq_14_q: "Garantissez-vous la résistance à l'humidité des meubles de salle de bain ?",
        faq_14_a: "Absolument. Les meubles de salle de bain et de cuisine subissent beaucoup d'humidité. Par conséquent, nous concevons ces bases strictement avec du contreplaqué marin ou du MDF hautement scellé, en utilisant également des fonds de protection en aluminium dans la zone de l'évier.",
        faq_15_q: "Aidez-vous à intégrer des plans de travail en marbre et en pierre dans la cuisine ?",
        faq_15_a: "Nous travaillons en partenariat avec d'excellents marbriers de la région (Silestone, Dekton, marbre ou granit). Frota Móveis structure le squelette de base de manière ultra-résistante dans ses îlots pour accueillir ces pierres lourdes en toute sécurité.",
        faq_16_q: "Comment effectuez-vous le relevé technique de votre espace ?",
        faq_16_a: "Nous apportons une instrumentation technique laser à votre villa ou appartement. Nous enregistrons la précision des murs et cartographions toutes les prises de courant, les luminaires et les plinthes électriques avant de concevoir et de fabriquer les pièces encastrées complètes.",
        faq_17_q: "L'assemblage des meubles sur mesure est-il effectué par Frota Móveis ?",
        faq_17_a: "Nous ne déléguons jamais l'assemblage à des équipes tierces informelles. Les techniciens qui effectuent les coupes dans notre atelier à Cascavel accompagnent les montages à votre domicile, garantissant précision, rigueur des détails et soin total à l'intérieur.",
        faq_18_q: "L'installation de meubles sur mesure génère-t-elle beaucoup de gravats et de poussière ?",
        faq_18_a: "Contrairement aux menuisiers traditionnels, nous minimisons cela. L'essentiel de la fabrication a lieu dans nos installations. Jusqu'à 95 % de l'armoire ou de la cuisine arrive chez vous déjà plié, laqué, percé et propre. Sur place, il n'y a qu'un alignement de calibrage silencieux et propre.",
        faq_19_q: "Comment protégez-vous l'environnement domestique sensible pendant le montage ?",
        faq_19_a: "Nous protégeons les passages de vos meubles en recouvrant les planches de bois riche et les sols de denses couvertures isolantes et de Téflon. Tout le flux de grands panneaux dans votre salon et votre chambre est extrêmement prudent, évitant d'érafler les murs ou les encadrements de portes.",
        faq_20_q: "L'espace doit-il être vide pour que l'équipe commence le montage ?",
        faq_20_a: "Oui, nous conseillons que la zone spécifique de la cuisine ou de l'armoire encastrée soit libre et organisée pour un large accès de l'équipe lors de l'utilisation de perceuses-visseuses et de règles précises. À la fin du montage, nous garantissons une aspiration maximale et un nettoyage final à l'intérieur des portes et des panneaux.",
        faq_21_q: "Quelle est la garantie de vos meubles premium et cuisines ?",
        faq_21_a: "Nous offrons une garantie de 3 ans sur tous les projets de menuiserie et dressings sur mesure. Nous utilisons d'excellentes matières premières qui préviennent les défauts structurels et garantissent une longue durabilité.",
        faq_22_q: "Avez-vous un SAV à Cascavel et dans la région ?",
        faq_22_a: "Oui. Nous fournissons une assistance technique directe et rapide à tous nos clients à Cascavel et dans l'ouest du Paraná. S'il y a une anomalie, nous nous rendons sur place pour la résoudre.",
        faq_23_q: "Que se passe-t-il si les portes ou les tiroirs se dérèglent ?",
        faq_23_a: "Le bois et les charnières peuvent subir de légers ajustements naturels au cours de la première année. Il suffit de contacter Frota Móveis et notre équipe technique calibrera rapidement la quincaillerie européenne (BLUM/Häfele) sans frais supplémentaires.",
        faq_24_q: "Quelle est la durée de vie d'une cuisine ou d'un dressing haut de gamme ?",
        faq_24_a: "Les meubles de luxe fabriqués par Frota Móveis sont conçus pour durer des décennies. Nous utilisons des panneaux massifs, des laquages rigoureux et des méthodes d'assemblage invisibles qui ne cèdent pas sous le poids habituel.",
        faq_25_q: "Comment nettoyer les finitions laquées ou les mélaminés ?",
        faq_25_a: "L'entretien est très simple. Utilisez uniquement un chiffon doux (type microfibre) humidifié à l'eau avec un peu de savon neutre. N'utilisez jamais d'éponges agressives ni de produits chimiques abrasifs puissants.",

        contact_subtitle: "Parlez-Nous",
        contact_title_text: "Commencez votre",
        contact_title_em: "Transformation",
        contact_desc: "Remplissez le formulaire ci-dessous ou contactez-nous directement via WhatsApp pour demander votre devis.",
        contact_phone_label: "Téléphone",
        contact_whatsapp_label: "WhatsApp",
        contact_email_label: "Email",
        contact_address_label: "Adresse",
        form_name: "Nom Complet",
        form_phone: "Téléphone Portable",
        form_email: "Email",
        form_message: "Message / Détails supplémentaires",
        form_furniture_type: "Quel meuble souhaitez-vous réaliser ?",
        form_furniture_placeholder: "Sélectionnez une option (ex : Cuisine, Armoire...)",
        form_opt_cozinha: "Cuisine",
        form_opt_roupeiro: "Armoire",
        form_opt_closet: "Dressing",
        form_opt_sala: "Meuble de Salon",
        form_opt_banho: "Meuble de Salle de Bain",
        form_opt_outro: "Autre",
        form_project_status: "Avez-vous déjà un projet ?",
        form_project_placeholder: "Sélectionnez une option",
        form_opt_tem_projeto: "Oui, j'ai un projet/des mesures",
        form_opt_precisa_projeto: "Non, j'ai besoin d'un projet",
        form_location: "Lieu d'installation",
        btn_whatsapp_send: "Envoyer le Résumé",
        btn_submit: "Demander Contact",
        footer_about: "Experts en meubles sur mesure, alliant design, fonctionnalité et confort en chaque projet.",
        footer_links_title: "Liens Rapides",
        footer_legal_title: "Légal",
        footer_terms: "Termes et Conditions",
        footer_privacy: "Politique de Confidentialité",
        footer_rights: "Tous droits réservés.",
        footer_dev: "Développé par",
        exit_title: "Encore des questions ?<br>Nous vous aidons !",
        exit_desc: "Avant de partir, parlez à l'un de nos spécialistes. Bénéficiez d'un accompagnement personnalisé pour trouver exactement ce que vous cherchez, sans engagement.",
        exit_btn: "PARLER À UN SPÉCIALISTE MAINTENANT"
    },
    de: {
        meta_title: "Maßgefertigte Möbel in Cascavel-PR | Küchen, Schränke Premium | Frota Móveis",
        meta_description: "Luxus-Maßmöbel in Cascavel-PR und im Westen Paranás. Eigene Werkstatt in Cascavel. 3D-Design, geplante Küchen, Premium-Schränke. Kostenlose Beratung. +55 45 3096-0906",
        nav_home: "Startseite",
        nav_about: "Über Uns",
        nav_services: "Leistungen",
        nav_portfolio: "Umbauten",
        nav_contact: "Kontakt",
        btn_quote: "Angebot Anfordern",
        btn_nav_contact: "Kontaktieren Sie Uns",
        btn_portfolio: "Portfolio Ansehen",
        btn_hero_contact: "Sprechen Sie Mit Uns",
        btn_read_more: "Weiterlesen <svg class='fa-icon fa-arrow-right' aria-hidden='true'><use href='#fa-arrow-right'></use></svg>",
        hero_subtitle: "SPEZIALISTEN FÜR MASSMÖBEL",
        hero_title_1: "Verwandeln Sie Ihre Räume in",
        hero_title_2: "Personalisierte",
        hero_title_3: "Kunstwerke",
        hero_desc: "Maßgefertigte Möbel, die Funktionalität, Design und Qualität vereinen.<br>Jedes Projekt ist einzigartig, genau wie Ihr Raum.",
        exp_number: "25+",
        exp_text: "Jahre<br>Erfahrung",
        about_subtitle: "Wer Wir Sind",
        about_title_text: "Unsere",
        about_title_em: "Geschichte",
        about_text_1: "Frota Móveis Planejados entstand aus der Verbindung zweier leidenschaftlicher Generationen für exzellente Holzarbeiten. Silo Frota dos Anjos, der Gründer, baute jahrzehntelange Erfahrung im hochwertigen Möbelbau auf und etablierte einen soliden Ruf in Cascavel und Westparaná.",
        about_text_2: "Silas Frota dos Anjos Neto brachte Innovation, modernes Management und Technologie in das Familienunternehmen und verband traditionelles Handwerk mit 3D-Design und erstklassigen Materialien. Gemeinsam stellen sie sicher, dass jedes Detail die Erwartungen der Kunden übertrifft.",
        about_text_3: "In unserer Werkstatt in Cascavel (Paraná, Brasilien) kreieren wir einzigartige, spezialisierte Tischlereiprojekte. Mit vielen gelieferten Projekten und garantierter maximaler Zustimmung sind wir in der gesamten Region Westparaná tätig: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina und Corbélia. Wir verwenden MDF der Marken Arauco, Duratex, Guararapes und Sudati sowie erstklassige Beschläge (Blum, Häfele) in einem 100% transparenten Prozess: vom individuellen Design bis zur professionellen Installation. Wir gewährleisten eine sichere, langlebige Investition mit umfassendem Support.",
        stat_1_num: "10+ Jahre",
        stat_1_desc: "Erfahrung",
        stat_2_num: "Viele Projekte",
        stat_2_desc: "Geliefert",
        stat_3_num: "100%",
        stat_3_desc: "Zufriedenheit",
        services_subtitle: "Was Wir Tun",
        services_title_text: "Unsere",
        services_title_em: "Leistungen",
        srv_1_title: "Maßgefertigte Möbel",
        srv_1_desc: "Einzigartige Stücke, millimetergenau entworfen. Wir garantieren maximale Nutzung und hervorragende Oberflächen traditioneller Tischlerarbeiten.",
        srv_2_title: "Innenausstattung",
        srv_2_desc: "Komplette 3D-Visualisierung Ihres Projekts. Wir harmonisieren Materialien und Beleuchtung, um Ästhetik und Funktionalität zu vereinen.",
        srv_3_title: "Maßgefertigte Kleiderschränke und begehbare Schränke",
        srv_3_desc: "Luxuriöse Kleiderschränke und begehbare Schränke mit personalisierter Aufteilung. Soft-Close-Schubladen und integrierte LEDs für maximale Praktikabilität.",
        srv_4_title: "Maßgefertigte Küchen",
        srv_4_desc: "Robuste Küchen mit wasserfesten Materialien und erstklassigen Beschlägen. Wir vereinen Widerstandsfähigkeit und Design, von rustikal bis hin zu minimalistisch.",
        srv_5_title: "Badezimmermöbel",
        srv_5_desc: "Feuchtigkeitsbeständige Möbel mit anspruchsvollem Design. Langlebige und intelligente Lösungen für die Organisation Ihres Badezimmers.",
        srv_6_title: "Gewerbliche Möbel",
        srv_6_desc: "Theken und Büromöbel, die Ihre Marke aufwerten. Ergonomische Lösungen, die beeindrucken.",
        port_subtitle: "Unsere Arbeit",
        port_title_text: "Unsere",
        port_title_em: "Umbauten",
        port_desc: "Sehen Sie sich unsere aktuellen Projekte an und lassen Sie sich von den Ergebnissen überraschen.",
        port_1_title: "3-in-1 Wohnzimmermöbel: TV, Kamin & Bar",
        port_1_desc: "Maßgefertigtes Regal aus Holz und Marmor, das Unterhaltung, Komfort und Raffinesse vereint.",
        port_2_title: "Moderne Salbei-Grüne Küche",
        port_2_desc: "Marmorinsel und beleuchtete Lamellenwand.",
        port_3_title: "Einbauschrank mit Fensterbereich",
        port_3_desc: "Optimierte Aufbewahrungslösung mit zentralen Schubladen und Seitentüren, perfekt um jeden Zentimeter Ihres Raumes zu nutzen.",
        port_4_title: "Geplantes Chefbüro",
        port_4_desc: "Die perfekte Balance zwischen Technologie, Komfort und Raffinesse.",
        port_5_title: "Ist Ihr Projekt das nächste?",
        port_5_desc: "Lassen Sie uns Ihre Vision verwirklichen mit dem Hauch von Luxus, den Ihr Zuhause verdient.",
        port_5_btn: "BERATUNG VEREINBAREN",
        port_6_title: "Moderne Holz- und Marmorküche",
        port_6_desc: "Lassen Sie sich von diesem anspruchsvollen Design inspirieren, das geplante Schränke, eine Kochinsel mit Lamellen-Finish und die zeitlose Eleganz heller Verkleidungen vereint.",
        port_7_title: "Modernes Home Office im Industrie-Design",
        port_7_desc: "Entdecken Sie Ideen für schwebende Regale, Wände in Zementoptik und intelligente Tischlerarbeiten zur Optimierung Ihres Arbeitsplatzes.",
        port_8_title: "Schrank mit Eingebautem Schreibtisch",
        port_8_desc: "Minimalismus und Funktionalität in maßgeschneiderten Holzarbeiten.",
        port_9_title: "Minimalistisches Schwebendes TV-Paneel mit LED",
        port_9_desc: "Die perfekte Balance zwischen Funktionalität und Luxus. Werten Sie Ihr Wohnzimmer mit diesem zeitgemäßen Möbelstück auf, das natürliche Texturen und dekorative Nischen kombiniert.",
        port_10_title: "Geplantes Heimkino aus Holz",
        port_10_desc: "Raffinesse mit integrierter Beleuchtung und seitlichen Nischen.",
        port_11_title: "Modernes Schlafzimmer mit Beleuchtung",
        port_11_desc: "Kompaktes und funktionales Design mit integriertem Kopfteil.",
        port_12_title: "Minimalismus mit Lamellen",
        port_12_desc: "Maßgeschneiderte Raffinesse und Raumoptimierung.",
        port_13_title: "Minimalistischer Hängeschrank",
        port_13_desc: "Schwebendes Design mit Doppelwaschbecken und Premium-Finish.",
        port_btn_more: "Weitere Projekte Ansehen",
        port_more_title: "Weitere Transformationen",
        badge_before: "VORHER",
        badge_after: "NACHHER",
        process_subtitle: "Methodik",
        process_title_text: "Unser",
        process_title_em: "Prozess",
        process_desc: "",
        proc_1_title: "Beratung",
        proc_1_desc: "Erstgespräch, um Ihre Bedürfnisse, Ihren Raum und Ihren Stil zu verstehen.",
        proc_2_title: "3D-Design",
        proc_2_desc: "Projektpräsentation mit realistischen Renderings zur Genehmigung.",
        proc_3_title: "Produktion",
        proc_3_desc: "Sorgfältige Fertigung in unserer Werkstatt mit Premium-Materialien.",
        proc_4_title: "Installation",
        proc_4_desc: "Endmontage vor Ort durch unsere Spezialisten.",
        test_subtitle: "Feedback",
        test_title_text: "Was Unsere",
        test_title_em: "Kunden",
        test_1_desc: "\"Versuchte immer zu verstehen, was beabsichtigt war, ohne Schwierigkeiten, Änderungen/Kritik anzunehmen. Hat genau das geliefert, was gefragt war, in kürzerer Zeit als erwartet und immer mit Freundlichkeit und Professionalität!!\"",
        test_2_desc: "\"Der Profi zeigte Exzellenz, Kreativität und Hingabe an das Projekt. Aufmerksam auf Details und die Interessen des Kunden, übertraf er alle Erwartungen mit fundierten Vorschlägen und relevanten Anregungen.\"",
        test_3_desc: "\"Ausgezeichneter Profi. Hat das Schlafzimmerprojekt an einem Wochenende mit allen gewünschten Details abgeschlossen. Schnelle, qualitativ hochwertige Arbeit mit großer Verfügbarkeit und Geduld. Ich empfehle.\"",
        test_4_desc: "\"Sehr gut verarbeitete Möbel von höchster Qualität. Sehr zu empfehlen. Abgesehen vom besten Kundenservice, den wir je hatten.\"",
        test_5_desc: "\"Sehr zu empfehlen! Alles verlief perfekt vom ersten Kontakt über das Projekt bis zur Lieferung. Hochwertiges Material und Service.\"",
        test_6_desc: "\"Super professionell, aufmerksam auf Details und sehr fürsorglich. Sehr zu empfehlen.\"",
        test_client_label: "Kunde",
        faq_subtitle: "Häufige Fragen",
        faq_title_text: "Häufig Gestellte",
        faq_title_em: "Fragen",
        faq_cat_1: "Projekt und Prozess",
        faq_cat_2: "Budget und Investition",
        faq_cat_3: "Materialien und Oberflächen",
        faq_cat_4: "Installation und Montage",
        faq_cat_5: "Garantie und Support",
        faq_1_q: "Wie funktioniert die Beratung für maßgeschneiderte Möbel in Cascavel-PR?",
        faq_1_a: "Wir beginnen mit einem kostenlosen technischen Besuch in der Region (Cascavel, Toledo, Foz do Iguaçu, Marechal Cândido Rondon), um den Raum zu bewerten, genaue Maße zu nehmen und Ihre Premium-Designideen zu besprechen. Ziel ist es, Stil, Budget und tatsächliche Bedürfnisse in Einklang zu bringen.",
        faq_2_q: "Erstellen Sie 3D-Projekte für Premium-Küchen und Schränke?",
        faq_2_a: "Ja. Wir präsentieren vor der Produktion in unserer Werkstatt in Cascavel ein detailliertes realistisches 3D-Projekt. So sehen Sie genau, wie die hochwertigen Möbel in Ihrem Raum wirken. Erst nach Ihrer vollständigen Freigabe fertigen wir.",
        faq_3_q: "Wie lange ist die Lieferzeit für Premium-Möbel?",
        faq_3_a: "Die Vorlaufzeit richtet sich nach der Projektkomplexität. Einzelstücke benötigen im Durchschnitt 3 bis 5 Wochen Produktion. Komplette Umbauten von Premium-Küchen und -Schränken dauern 6 bis 8 Wochen und garantieren Spitzenleistungen bei strengen Oberflächen.",
        faq_4_q: "Wie garantieren Sie die perfekte Passform maßgeschneiderter Möbel?",
        faq_4_a: "Durch eine umfassende technische Bestandserfassung vor Ort (Cascavel und Region Westparaná). Wir bewerten Unebenheiten, Ausrichtung und Rohrleitungen, was eine zu 100 % passgenaue Anfertigung für Ihre Immobilie ohne Fehlertoleranz ermöglicht.",
        faq_5_q: "Kann ich die Details nach der Ansicht des 3D-Modells noch ändern?",
        faq_5_a: "Ja. Sie können in der 3D-Überprüfungsphase die Oberflächen, Hölzer, Beschläge oder auch die Innenaufbewahrung anpassen. Die Herstellung Ihrer Luxusstücke beginnt erst, wenn Sie mit dem endgültigen Projekt vollkommen zufrieden sind.",
        faq_6_q: "Wie wird das Angebot für maßgefertigte Möbel erstellt?",
        faq_6_a: "Unsere Angebote sind fair, detailliert und 100 % transparent, ohne versteckte Kosten. Jedes gewählte Premium-Material (vom Lack bis zum Scharnier) wird im abschließenden Vorschlag nach Projektgenehmigung begründet.",
        faq_7_q: "Planen und leiten Sie Tischlereiprojekte in Toledo, Foz do Iguaçu und anderen Städten der Region?",
        faq_7_a: "Ja. Unsere Werkstatt befindet sich in Cascavel-PR, wodurch wir die gesamte Region Westparaná schnell bedienen können: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina und Corbélia.",
        faq_8_q: "Welche Investition ist für ein Luxus-Möbelprojekt erforderlich?",
        faq_8_a: "Wir fordern keine Mindestwerte. Von der Anfertigung einer einzelnen Premium-TV-Einheit bis zur vollständigen Tischlerei einer Villa. Das Angebot wird den Vorlieben und Skandinavien-Materialien, dem Marmorstein oder den hochverdichteten Melaminen angepasst.",
        faq_9_q: "Sind Transport und Montage im Angebot enthalten?",
        faq_9_a: "Ja. Sämtliche Frota Móveis-Proposals werden schlüsselfertig geliefert. Die Betriebskosten (achtsamer Transport und fachgerechte Montage an Ihrem Wohnort) sind im endgültigen genehmigten Wert bereits enthalten.",
        faq_10_q: "Garantieren Sie absolute Transparenz beim Endpreis?",
        faq_10_a: "Ja. Der kalkulierte und fakturierte Betrag entspricht exakt den festgelegten Spezifikationen (Art der Hardware, gewählte Platten und Türen). Eine geänderte Meinung zieht stets ein überarbeitetes Angebot ohne Überraschungen nach sich.",
        faq_11_q: "Woraus genau bestehen die Premium-Materialien in hochwertigen Möbeln?",
        faq_11_a: "Wir verwenden keine herkömmlichen Spanplatten. Als Basis verwenden wir MDF und feuchtigkeitsbeständiges MDF der Marken Arauco, Duratex, Guararapes und Sudati. Das garantiert vorzeitiger Abnutzung geschützte glatte, matte oder auch strukturgebundene Fronten.",
        faq_12_q: "Verwenden Sie Soft-Close-Dämpfer in den Küchen?",
        faq_12_a: "Soft-Close ist unsere unverzichtbare Standardausstattung. Wir setzen ausschließlich Premium-Schiebe- und Magnetverschlusssysteme der Weltmarken (BLUM, Häfele und Emuca) für Langlebigkeit bei Millionen stiller Öffnungen ein.",
        faq_13_q: "Bieten Sie auch hochwertige Lackierungen und Verkleidungen mit gehärtetem Glas an?",
        faq_13_a: "Ja. Unsere Stärke ist ein ultrabehandlung oder stark reflektierender Glanzlack durch besondere Trocknung. Wir erstellen luxuriöse Trennwände, in die elegantes Aluminium, Bronze- oder getöntes Glas sowie integrierte LED-Lichttechnik bei fantastischen Schränken und Küchen einfließen.",
        faq_14_q: "Gewährleisten Sie die Feuchtigkeitsbeständigkeit bei Badmöbeln?",
        faq_14_a: "Absolut. Möbel für Küche und Bad sind hoher Feuchtigkeit ausgesetzt. Aus diesem Grund konstruieren wir genau diese Böden ausschließlich aus Marinesperrholz oder äußerst dicht verschlossenem MDF. Gleichzeitig setzen wir Schutzabdeckungen aus dem Material Aluminium im Bereich des Spülbeckens ein.",
        faq_15_q: "Helfen Sie bei der Integration von Marmor- und Steinflächen in der Küche?",
        faq_15_a: "Wir arbeiten eng zusammen mit erstklassigen Steinmetzen der Region (Silestone, Dekton, echtes Granit und Marmor). Frota Móveis ist dabei sehr erfahren im Planen ultrastarker Fundamente der eigenen Kochinseln, in der Absicht der risikolosen Trägerplatzierung für exakt solche massiven Felsen.",
        faq_16_q: "Wie nehmen Sie die Raummaße technisch auf?",
        faq_16_a: "Wir bringen zu Ihrer Villa oder Wohnung eine entsprechende technische Instrumentierung durch den Einsatz modernster Laser mit. Die Genauigkeiten der einzelnen Wände werden aktenkundig verzeichnet. Danach zeichnen wir jede Buchsenleiste, Steckerfassungen und Fußleistenabdeckung mit Stromaustritt in Form einer echten Grafik vor Ausarbeitung beziehungsweise Fertigung des letztendigen Gesamtmöbelstücks auf.",
        faq_17_q: "Die Installation für maßgeschneiderte Inneneinrichtungen erledigt Frota Móveis wirklich selbst?",
        faq_17_a: "Die finale Übergabe oder Endmontage wird in keinster Ausprägung formalitätsfreien Dritthandwerkern untergeordnet. Jene Arbeitskräfte, welche den Maßschnitt in unserer Werkstatt in Cascavel leisten, begleiten anschließend exakt gleiche Monteurfahrten zu Ihrem Zuhause. Dadurch ist für alle handwerklichen Schränke Akkuratesse als auch detail-präziser Vollzug des Einbaus im Haus bestens gewährleistet.",
        faq_18_q: "Verursacht der Einbau von Maßmöbeln viel Staub und Schmutz?",
        faq_18_a: "Wir können derartige Nachteile im Gegenzug zum traditionell ausgerichteten Handwerksraum umgehen. Ein bedeutend umfangreicher Teil bei Ausbau findet bei uns direkt statt. Maximal 95 Prozent der Küchen-Komponenten befinden sich vormontiert, beklebt mitsamt allen Schraubausstanzungen bei der reinen Übergabepflicht unbeschädigt vor Ort. Unter der Privatanschrift erleben unsere Nutzer bloß präzise Justierungsabgleiche gänzlich ohne lärmintensives Verhalten und Verunreinigungen.",
        faq_19_q: "Auf was für eine Art wird denn beim Zusammenbau der schonende Umgang gegenüber des Privateigentums gesichert?",
        faq_19_a: "Die Schutzmechanismen betreffen direkt den Gang über Edelhölzern wie massiven Platten-Elementen mitsamt beständigen Fußbodengütern mittels der Verwendung eines absolut widerstandsfähigen Beschichtungsteflons sowie dichten Dämmfolien. Das Transportieren aller großdimensionierten Wandplatten bei Einbringen in die Empfangs- wie Schlafbereiche obliegt vorsichtiger Achtsamkeit. Schrankenelemente weisen in der Hinsicht keinen Kratzvermerk auf Hauswand beziehungswiese beim Berühren des Türschwellen-Durchgangs auf.",
        faq_20_q: "Setzt sich generell das Freiwerden entsprechender Standbereiche gegenüber dem Errichtungsteam als Beginnzwang voraus?",
        faq_20_a: "Rundheraus ist der Verzicht von Hindernissen dort beim Küchenstandplatz sehr anratenswert und begünstigt bei großem Zugang den Gebrauch beim Einsatz von exakter Richtscheit, Handbohrmaschine und das Akkuwesen der Truppe immens. Ganz abschließend obliegt in Hinsicht aller Abschlüsse von uns aus der reine Garantieeinsatz des Aussaugens aller Ecken mitsamt dem letzten Fegen aller Flächen beziehungsweise im Schrank selbst.",
        faq_21_q: "Welche Garantie gibt es für Ihre Premium-Möbel und Küchen?",
        faq_21_a: "Wir bieten 3 Jahre Garantie auf alle maßgeschneiderten Schreiner- und Schrankprojekte. Wir verwenden hervorragende Rohstoffe, die strukturelle Mängel verhindern und eine lange Haltbarkeit garantieren.",
        faq_22_q: "Haben Sie einen Kundendienst in Cascavel und der Region?",
        faq_22_a: "Ja. Wir bieten allen unseren Kunden in Cascavel und im Westen Paranás direkte und schnelle technische Unterstützung. Bei Unregelmäßigkeiten kommen wir vor Ort, um diese zu beheben.",
        faq_23_q: "Was passiert, wenn sich Türen oder Schubladen verstellen?",
        faq_23_a: "Holz und Scharniere können im ersten Jahr leichten natürlichen Anpassungen unterliegen. Kontaktieren Sie einfach Frota Móveis und unser technisches Team kalibriert die europäischen Beschläge (BLUM/Häfele) schnell und kostenlos.",
        faq_24_q: "Wie lange hält eine hochwertige Küche oder ein Schrank?",
        faq_24_a: "Die von Frota Móveis gefertigten Luxusmöbel sind auf jahrzehntelange Haltbarkeit ausgelegt. Wir verwenden massive Platten, strenge Lackierungen und unsichtbare Verbindungsmethoden, die unter routinemäßigem Gewicht nicht nachgeben.",
        faq_25_q: "Wie reinigt man lackierte Oberflächen oder Melamine?",
        faq_25_a: "Die Pflege ist sehr einfach. Verwenden Sie nur ein weiches Tuch (z. B. Mikrofaser), das Sie mit Wasser und etwas neutraler Seife angefeuchtet haben. Verwenden Sie niemals aggressive Schwämme oder starke scheuernde Chemikalien.",

        contact_subtitle: "Sprechen Sie Mit Uns",
        contact_title_text: "Beginnen Sie Ihre",
        contact_title_em: "Verwandlung",
        contact_desc: "Füllen Sie das untenstehende Formular aus oder kontaktieren Sie uns direkt über WhatsApp, um Ihr Angebot anzufordern.",
        contact_phone_label: "Telefon",
        contact_whatsapp_label: "WhatsApp",
        contact_email_label: "E-Mail",
        contact_address_label: "Adresse",
        form_name: "Vollständiger Name",
        form_phone: "Mobiltelefon",
        form_email: "E-Mail",
        form_message: "Nachricht",
        form_furniture_type: "Welches Möbelstück möchten Sie anfertigen?",
        form_furniture_placeholder: "Wählen Sie eine Option (z.B. Küche, Kleiderschrank...)",
        form_opt_cozinha: "Küche",
        form_opt_roupeiro: "Kleiderschrank",
        form_opt_closet: "Ankleidezimmer",
        form_opt_sala: "Wohnzimmermöbel",
        form_opt_banho: "Badezimmermöbel",
        form_opt_outro: "Sonstiges",
        form_project_status: "Haben Sie bereits ein Projekt?",
        form_project_placeholder: "Wählen Sie eine Option",
        form_opt_tem_projeto: "Ja, ich habe ein Projekt/Maße",
        form_opt_precisa_projeto: "Nein, ich brauche ein Projekt",
        form_location: "Installationsort",
        btn_whatsapp_send: "Zusammenfassung Senden",
        btn_submit: "Kontakt Anfordern",
        footer_about: "Experten für maßgefertigte Möbel, die bei jedem Projekt Design, Funktionalität und Komfort vereinen.",
        footer_links_title: "Schnelle Links",
        footer_legal_title: "Rechtliches",
        footer_terms: "Allgemeine Geschäftsbedingungen",
        footer_privacy: "Datenschutzerklärung",
        footer_rights: "Alle Rechte vorbehalten.",
        footer_dev: "Entwickelt von",
        exit_title: "Noch Fragen?<br>Wir helfen Ihnen!",
        exit_desc: "Bevor Sie gehen, sprechen Sie mit einem unserer Spezialisten. Erhalten Sie eine persönliche Beratung, um genau das zu finden, was Sie suchen – unverbindlich.",
        exit_btn: "JETZT MIT EINEM SPEZIALISTEN SPRECHEN"
    }
};

document.addEventListener('DOMContentLoaded', () => {

    // --- Elements ---
    const header = document.getElementById('header');
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    // --- Sticky Header ---
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // --- Mobile Menu Toggle ---
    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // --- Scroll Animations ---
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');

                // Add animated line class to timeline if the target is in the process section
                if (entry.target.classList.contains('process-step') || entry.target.classList.contains('process-timeline')) {
                    const timeline = document.querySelector('.process-timeline');
                    if (timeline) timeline.classList.add('animate-line');
                }

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate-on-scroll, .process-timeline');
    animatedElements.forEach(el => observer.observe(el));

    // --- FAQ Accordion logic ---
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Close other currently open FAQ item
            const currentlyActive = document.querySelector('.faq-item.active');
            if (currentlyActive && currentlyActive !== item) {
                currentlyActive.classList.remove('active');
                currentlyActive.querySelector('.faq-answer').style.maxHeight = null;
            }

            // Toggle this FAQ item
            item.classList.toggle('active');
            const answer = item.querySelector('.faq-answer');
            if (item.classList.contains('active')) {
                // Defer scrollHeight read to next frame to avoid forced reflow
                requestAnimationFrame(() => {
                    answer.style.maxHeight = answer.scrollHeight + 50 + "px";
                });
            } else {
                answer.style.maxHeight = null;
            }
        });
    });

    // --- FAQ Category Tabs ---
    const faqTabs = document.querySelectorAll('.faq-tab');
    const faqCategories = document.querySelectorAll('.faq-category');

    faqTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const category = tab.getAttribute('data-category');

            // Update active tab
            faqTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // Close any open accordion in the current category
            const currentlyActive = document.querySelector('.faq-item.active');
            if (currentlyActive) {
                currentlyActive.classList.remove('active');
                currentlyActive.querySelector('.faq-answer').style.maxHeight = null;
            }

            // Show matching category, hide others
            faqCategories.forEach(cat => {
                if (cat.getAttribute('data-category') === category) {
                    cat.classList.add('active');
                } else {
                    cat.classList.remove('active');
                }
            });
        });
    });

    // --- Multi-Language System ---
    const langLinks = document.querySelectorAll('.lang-dropdown a');
    const currentLangText = document.getElementById('current-lang');

    // Function to set up a language
    function setLanguage(langCode) {
        if (!translations[langCode]) return;

        // Change text values based on data-i18n
        const elementsToTranslate = document.querySelectorAll('[data-i18n]');
        elementsToTranslate.forEach(element => {
            const key = element.getAttribute('data-i18n');
            if (translations[langCode][key]) {
                // If it contains HTML like the arrow icon, use innerHTML, else textContent.
                // It's safer to use innerHTML so tags inside string are parsed.
                element.innerHTML = translations[langCode][key];
            }
        });

        // Set button text to current Lang uppercase (e.g. EN, PT)
        currentLangText.textContent = langCode.toUpperCase();

        // Save preference
        localStorage.setItem('preferredLang', langCode);
        document.documentElement.lang = langCode;
    }

    const langBtn = document.getElementById('lang-btn');
    const langSelector = document.querySelector('.lang-selector');

    if (langBtn && langSelector) {
        langBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            langSelector.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!langSelector.contains(e.target)) {
                langSelector.classList.remove('active');
            }
        });
    }

    // Bind events
    langLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const selectedLang = link.getAttribute('data-lang');
            setLanguage(selectedLang);

            if (langSelector) {
                langSelector.classList.remove('active');
            }
            if (document.activeElement) {
                document.activeElement.blur();
            }
        });
    });

    // Detect browser lang or use stored
    const savedLang = localStorage.getItem('preferredLang');
    if (savedLang && translations[savedLang]) {
        setLanguage(savedLang);
    } else {
        // Default to Portuguese since the target audience is Portugal
        setLanguage('pt');
    }

    // --- Portfolio Before/After Sliders ---
    const portfolioSliders = document.querySelectorAll('.portfolio-slider');
    portfolioSliders.forEach(slider => {
        const input = slider.querySelector('.slider-input');
        if (input) {
            input.addEventListener('input', (e) => {
                slider.style.setProperty('--position', `${e.target.value}%`);
            });
        }
    });

    // --- Testimonials Carousel Navigation ---
    const carousel = document.getElementById('testimonialsCarousel');
    // Scope selectors to avoid selecting arrows from the process timeline
    const testimonialsWrapper = document.querySelector('.testimonials-wrapper');
    let prevBtn = null, nextBtn = null, dots = [];

    const testimonialsSection = document.querySelector('.testimonials');
    if (testimonialsWrapper) {
        prevBtn = testimonialsWrapper.querySelector('.prev-btn');
        nextBtn = testimonialsWrapper.querySelector('.next-btn');

        // The dots are outside the wrapper, but inside the section
        if (testimonialsSection) {
            dots = testimonialsSection.querySelectorAll('.carousel-dots .dot');
        }
    }

    if (carousel && prevBtn && nextBtn) {
        // Cache card width to avoid repeated offsetWidth reads (forced reflow)
        let cachedCardWidth = 350;
        requestAnimationFrame(() => {
            const card = carousel.querySelector('.testimonial-card');
            if (card) cachedCardWidth = card.offsetWidth + 30;
        });
        const getScrollAmount = () => cachedCardWidth;

        // Arrow Buttons (infinite loop)
        prevBtn.addEventListener('click', () => {
            if (carousel.scrollLeft <= 10) {
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                carousel.scrollTo({ left: maxScroll, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
            }
        });

        nextBtn.addEventListener('click', () => {
            const maxScroll = carousel.scrollWidth - carousel.clientWidth;
            if (carousel.scrollLeft >= maxScroll - 10) {
                carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                carousel.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            }
        });

        // Pagination Dots (only if they exist)
        if (dots.length > 0) {
            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const index = parseInt(dot.getAttribute('data-index'));
                    const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                    const targetScrollLeft = (index / (dots.length - 1)) * maxScroll;
                    carousel.scrollTo({ left: targetScrollLeft, behavior: 'smooth' });
                });
            });

            // Debounced scroll handler to avoid forced reflow on every scroll tick
            let testimonialScrollRAF = null;
            carousel.addEventListener('scroll', () => {
                if (testimonialScrollRAF) return;
                testimonialScrollRAF = requestAnimationFrame(() => {
                    testimonialScrollRAF = null;
                    const scrollLeft = carousel.scrollLeft;
                    const maxScroll = carousel.scrollWidth - carousel.clientWidth;

                    if (maxScroll <= 0) return;

                    const scrollPercentage = scrollLeft / maxScroll;
                    let activeIndex = Math.round(scrollPercentage * (dots.length - 1));

                    if (activeIndex >= dots.length) activeIndex = dots.length - 1;
                    if (activeIndex < 0) activeIndex = 0;

                    dots.forEach((dot, index) => {
                        if (index === activeIndex) {
                            dot.classList.add('active');
                        } else {
                            dot.classList.remove('active');
                        }
                    });
                });
            });
        }
    }

    // --- Process Carousel Navigation (Mobile) ---
    const processCarousel = document.getElementById('processTimeline');
    const processPrevBtn = document.querySelector('.process-prev-btn');
    const processNextBtn = document.querySelector('.process-next-btn');
    const processDots = document.querySelectorAll('.process-dots .dot');

    if (processCarousel && processPrevBtn && processNextBtn && processDots.length > 0) {

        // Cache step width to avoid repeated offsetWidth reads (forced reflow)
        let cachedStepWidth = 300;
        requestAnimationFrame(() => {
            const step = processCarousel.querySelector('.process-step');
            if (step) cachedStepWidth = step.offsetWidth + 15;
        });
        const getProcessScrollAmount = () => cachedStepWidth;

        // Arrow Buttons (infinite loop)
        processPrevBtn.addEventListener('click', () => {
            if (processCarousel.scrollLeft <= 10) {
                const maxScroll = processCarousel.scrollWidth - processCarousel.clientWidth;
                processCarousel.scrollTo({ left: maxScroll, behavior: 'smooth' });
            } else {
                processCarousel.scrollBy({ left: -getProcessScrollAmount(), behavior: 'smooth' });
            }
        });

        processNextBtn.addEventListener('click', () => {
            const maxScroll = processCarousel.scrollWidth - processCarousel.clientWidth;
            if (processCarousel.scrollLeft >= maxScroll - 10) {
                processCarousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                processCarousel.scrollBy({ left: getProcessScrollAmount(), behavior: 'smooth' });
            }
        });

        // Pagination Dots
        processDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-index'));
                const scrollAmount = cachedStepWidth * index;
                processCarousel.scrollTo({ left: scrollAmount, behavior: 'smooth' });
            });
        });

        // Debounced scroll handler to avoid forced reflow
        let processScrollRAF = null;
        processCarousel.addEventListener('scroll', () => {
            if (processScrollRAF) return;
            processScrollRAF = requestAnimationFrame(() => {
                processScrollRAF = null;
                const scrollLeft = processCarousel.scrollLeft;
                const activeIndex = Math.round(scrollLeft / cachedStepWidth);

                processDots.forEach((dot, index) => {
                    if (index === activeIndex) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                });
            });
        });
    }

    // --- Portfolio Zoom Modal ---
    const zoomButtons = document.querySelectorAll('.portfolio-zoom-btn');
    const body = document.body;

    // Create Modal Element
    const modal = document.createElement('div');
    modal.className = 'portfolio-modal';
    modal.innerHTML = `
        <div class="modal-content-container">
            <button class="modal-close-btn" aria-label="Fechar">&times;</button>
            <div class="modal-body"></div>
        </div>
    `;
    body.appendChild(modal);

    const modalBody = modal.querySelector('.modal-body');
    const modalCloseBtn = modal.querySelector('.modal-close-btn');

    function openModal(card) {
        const slider = card.querySelector('.portfolio-slider').cloneNode(true);
        const info = card.querySelector('.portfolio-info-box').cloneNode(true);

        // Clear previous content
        modalBody.innerHTML = '';

        // Add elements to modal
        const modalContainer = document.createElement('div');
        modalContainer.className = 'portfolio-card modal-card';
        modalContainer.appendChild(slider);
        modalContainer.appendChild(info);
        modalBody.appendChild(modalContainer);

        // Remove the zoom button from the cloned slider to avoid confusion
        const clonedZoomBtn = slider.querySelector('.portfolio-zoom-btn');
        if (clonedZoomBtn) clonedZoomBtn.remove();

        // Ensure images are visible and slider is initialized
        const input = slider.querySelector('.slider-input');
        if (input) {
            // Set initial position
            slider.style.setProperty('--position', `${input.value}%`);
            input.addEventListener('input', (e) => {
                slider.style.setProperty('--position', `${e.target.value}%`);
            });
        }

        // Show modal
        modal.classList.add('active');
        body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        body.style.overflow = '';
        // Small delay to clear content after transition
        setTimeout(() => {
            modalBody.innerHTML = '';
        }, 400);
    }

    zoomButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const card = btn.closest('.portfolio-card');
            if (card) openModal(card);
        });
    });

    modalCloseBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    // --- More Projects Inline Toggle ---
    const btnMoreProjects = document.getElementById('btn-more-projects');
    const extraProjects = document.querySelectorAll('.extra-project');

    if (btnMoreProjects && extraProjects.length > 0) {
        btnMoreProjects.addEventListener('click', (e) => {
            e.preventDefault();

            // Show the extra projects
            extraProjects.forEach(project => {
                project.style.display = 'block';

                // Set small timeout to allow display:block to apply before adding class for opacity transision if needed
                setTimeout(() => {
                    project.classList.add('is-visible');
                }, 50);

                // Initialize the slider if it hasn't been initialized yet
                const slider = project.querySelector('.portfolio-slider');
                if (slider) {
                    const input = slider.querySelector('.slider-input');
                    if (input && !slider.dataset.initialized) {
                        slider.style.setProperty('--position', `${input.value}%`);
                        input.addEventListener('input', (e) => {
                            slider.style.setProperty('--position', `${e.target.value}%`);
                        });
                        slider.dataset.initialized = "true";
                    }
                }
            });

            // Hide the button container once clicked
            const btnContainer = btnMoreProjects.closest('.portfolio-more-actions');
            if (btnContainer) {
                btnContainer.style.display = 'none';
            }
        });
    }

    // --- WhatsApp Form Submission ---
    const btnWhatsappForm = document.getElementById('btn-whatsapp-form');
    if (btnWhatsappForm) {
        btnWhatsappForm.addEventListener('click', () => {
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const furnitureType = document.getElementById('furniture-type').value;
            const projectStatus = document.getElementById('project-status').value;
            const location = document.getElementById('location').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !phone || !furnitureType || !projectStatus || !location) {
                alert('Por favor, preencha nome, telemóvel, tipo de móvel, status do projeto e local antes de enviar para o WhatsApp.');
                return;
            }

            let whatsappText = `Novo Pedido de Orçamento/Contacto\n`;
            whatsappText += `Nome: ${name}\n`;
            whatsappText += `Telemóvel: ${phone}\n`;
            if (email) whatsappText += `Email: ${email}\n`;
            whatsappText += `Tipo de Móvel: ${furnitureType}\n`;
            whatsappText += `Tem Projeto: ${projectStatus}\n`;
            whatsappText += `Local de Instalação: ${location}\n`;
            if (message) whatsappText += `Mensagem: ${message}\n`;


            const encodedText = encodeURIComponent(whatsappText);
            const whatsappUrl = `https://wa.me/554599180019?text=${encodedText}`;
            window.open(whatsappUrl, '_blank');
        });
    }

});










// Exit Intent Popup Logic
document.addEventListener('DOMContentLoaded', () => {
    const exitPopup = document.getElementById('exit-popup');
    const exitPopupClose = document.getElementById('exit-popup-close');
    const exitPopupBtn = document.getElementById('exit-popup-btn');
    const exitPopupOverlay = document.querySelector('.exit-popup-overlay');

    if (!exitPopup) return;

    let alreadyShown = localStorage.getItem('exitPopupShown');

    const showPopup = () => {
        if (alreadyShown) return;
        exitPopup.classList.add('show-popup');
        localStorage.setItem('exitPopupShown', 'true');
        alreadyShown = true;
    };

    const closeExitPopup = () => {
        exitPopup.classList.remove('show-popup');
    };

    // mouseleave: shows popup when mouse exits viewport towards top
    const showExitPopup = (e) => {
        if (e.clientY < 50 && !alreadyShown) {
            showPopup();
            document.removeEventListener('mouseleave', showExitPopup);
        }
    };

    document.addEventListener('mouseleave', showExitPopup);
    if (exitPopupClose) exitPopupClose.addEventListener('click', closeExitPopup);
    if (exitPopupOverlay) exitPopupOverlay.addEventListener('click', closeExitPopup);
    if (exitPopupBtn) exitPopupBtn.addEventListener('click', closeExitPopup);
});

// Contact Form Email Submission
document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.querySelector('.contact-form');
    if (!contactForm) return;

    // Store form load timestamp for anti-bot time check
    const formLoadTime = Math.floor(Date.now() / 1000);

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        // Loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<svg class="fa-icon fa-spinner fa-spin" aria-hidden="true"><use href="#fa-spinner"></use></svg> A enviar...';

        try {
            // Get fresh CSRF token to prevent cache issues (e.g. Varnish / HostGator page cache)
            let freshCsrf = document.getElementById('csrf-token')?.value || '';
            try {
                const csrfResponse = await fetch('get_csrf.php', { credentials: 'same-origin' });
                if (csrfResponse.ok) {
                    const csrfData = await csrfResponse.json();
                    if (csrfData.csrf_token) {
                        freshCsrf = csrfData.csrf_token;
                        // Update the hidden input as well
                        const tokenEl = document.getElementById('csrf-token');
                        if (tokenEl) tokenEl.value = freshCsrf;
                    }
                }
            } catch (err) {
                console.warn('Failed to fetch fresh CSRF token, using fallback.', err);
            }

            const formData = {
                name: document.getElementById('name')?.value || '',
                phone: document.getElementById('phone')?.value || '',
                email: document.getElementById('email')?.value || '',
                furniture: document.getElementById('furniture-type')?.value || '',
                project: document.getElementById('project-status')?.value || '',
                location: document.getElementById('location')?.value || '',
                message: document.getElementById('message')?.value || '',
                // Security fields
                _csrf: freshCsrf,
                _hp_field: document.getElementById('contact-hp')?.value || '',
                _ts: formLoadTime
            };

            const response = await fetch('send_email.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                credentials: 'same-origin',
                body: JSON.stringify(formData)
            });

            const result = await response.json();

            if (result.success) {
                // Success feedback
                submitBtn.innerHTML = '<svg class="fa-icon fa-check" aria-hidden="true"><use href="#fa-check"></use></svg> Enviado com sucesso!';
                submitBtn.style.backgroundColor = '#28a745';
                contactForm.reset();

                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.backgroundColor = '';
                    submitBtn.disabled = false;
                }, 4000);
            } else {
                throw new Error(result.message || 'Erro ao enviar.');
            }
        } catch (error) {
            submitBtn.innerHTML = '<svg class="fa-icon fa-xmark" aria-hidden="true"><use href="#fa-xmark"></use></svg> Erro ao enviar';
            submitBtn.style.backgroundColor = '#dc3545';

            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.style.backgroundColor = '';
                submitBtn.disabled = false;
            }, 3000);

            console.error('Form submission error:', error);
        }
    });
});
