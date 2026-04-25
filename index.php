<?php
// ========================================
// SESSION & CSRF TOKEN
// ========================================
session_start();

// Generate CSRF token if not exists
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Google Analytics - só carrega após consentimento de cookies (LGPD) -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }

        var gaLoaded = false;
        function loadGA() {
            if (gaLoaded) return;
            gaLoaded = true;
            gtag('js', new Date());
            gtag('config', 'G-67WXT7783M');
            var script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=G-67WXT7783M';
            document.head.appendChild(script);
        }

        // Só carrega se o utilizador já aceitou anteriormente
        if (localStorage.getItem('frota_cookie_consent') === 'accepted') {
            loadGA();
        }

        // Exposto globalmente para o banner de cookies
        window.frotaLoadGA = loadGA;
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="meta_title">Móveis Planejados em Cascavel PR | Cozinhas, Guarda-Roupas Sob Medida | Frota Móveis</title>
    <meta name="description"
        content="Móveis planejados em Cascavel-PR. Design 3D, cozinhas planejadas, guarda-roupas premium. Atendemos Cascavel, Toledo, Foz do Iguaçu e região. Orçamento gratuito. +55 45 3096-0906"
        data-i18n="meta_description">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.moveisfrota.com.br/">

    <!-- hreflang (multilingual) -->
    <link rel="alternate" hreflang="pt-BR" href="https://www.moveisfrota.com.br/">
    <link rel="alternate" hreflang="en" href="https://www.moveisfrota.com.br/">
    <link rel="alternate" hreflang="es" href="https://www.moveisfrota.com.br/">
    <link rel="alternate" hreflang="fr" href="https://www.moveisfrota.com.br/">
    <link rel="alternate" hreflang="de" href="https://www.moveisfrota.com.br/">
    <link rel="alternate" hreflang="x-default" href="https://www.moveisfrota.com.br/">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:type" content="business.business">
    <meta property="og:url" content="https://www.moveisfrota.com.br/">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:locale:alternate" content="es_ES">
    <meta property="og:locale:alternate" content="fr_FR">
    <meta property="og:locale:alternate" content="de_DE">
    <meta property="og:title" content="Frota Móveis Planejados – Sob Medida em Cascavel PR" data-i18n="og_title">
    <meta property="og:description"
        content="Transforme seus ambientes com móveis planejados. Design 3D, cozinhas planejadas e guarda-roupas premium em Cascavel-PR."
        data-i18n="og_description">
    <meta property="og:image" content="https://www.moveisfrota.com.br/hero.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Interior moderno com móveis planejados em Cascavel-PR">
    <meta property="og:site_name" content="Frota Móveis Planejados">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.moveisfrota.com.br/">
    <meta name="twitter:title" content="Móveis Planejados | Frota Móveis Cascavel-PR">
    <meta name="twitter:description"
        content="Design 3D, cozinhas planejadas, guarda-roupas sob medida em Cascavel-PR. Atendemos toda a região Oeste do Paraná. Orçamento gratuito.">
    <meta name="twitter:image" content="https://www.moveisfrota.com.br/hero.webp">

    <!-- Schema.org Structured Data (Google Rich Snippets) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FurnitureStore",
      "name": "Frota Móveis Planejados",
      "image": "https://www.moveisfrota.com.br/hero.webp",
      "logo": "https://www.moveisfrota.com.br/logofrota.svg",
      "@id": "https://www.moveisfrota.com.br/",
      "url": "https://www.moveisfrota.com.br/",
      "telephone": "+554530960906",
      "email": "comercial@moveisfrota.com.br",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rua Cláudia Galante Padovani, 1277 B",
        "addressLocality": "Cascavel",
        "postalCode": "85803-337",
        "addressRegion": "PR",
        "addressCountry": "BR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-24.9554",
        "longitude": "-53.4552"
      },
      "description": "Especialistas em móveis planejados em Cascavel-PR. Cozinhas planejadas, guarda-roupas, closets e mobiliário comercial com materiais premium. Atendemos Cascavel, Toledo, Foz do Iguaçu e toda a região Oeste do Paraná.",
      "priceRange": "$$$",
      "areaServed": [
        {"@type": "City", "name": "Cascavel"},
        {"@type": "City", "name": "Toledo"},
        {"@type": "City", "name": "Foz do Iguaçu"},
        {"@type": "City", "name": "Marechal Cândido Rondon"},
        {"@type": "City", "name": "Palotina"},
        {"@type": "City", "name": "Corbélia"},
        {"@type": "City", "name": "Guaraniaçu"},
        {"@type": "City", "name": "Medianeira"},
        {"@type": "City", "name": "Matelândia"},
        {"@type": "City", "name": "Santa Tereza do Oeste"},
        {"@type": "City", "name": "Campo Mourão"},
        {"@type": "City", "name": "Quedas do Iguaçu"},
        {"@type": "City", "name": "Catanduvas"},
        {"@type": "City", "name": "Boa Vista da Aparecida"}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "12",
        "bestRating": "5",
        "worstRating": "1"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "08:00",
          "closes": "12:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
          "opens": "13:00",
          "closes": "18:00"
        }
      ],
      "sameAs": [
        "https://www.instagram.com/frotamoveisplanejados",
        "https://www.facebook.com/share/1E2tQ22KTk/",
        "https://wa.me/554599180019",
        "https://share.google/FO4dFYRgNjaoNpsMT"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Serviços de Móveis Planejados",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Móveis Planejados", "description": "Peças únicas projetadas ao milímetro com acabamentos de excelência."}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Design de Interiores", "description": "Visualização 3D completa do seu projeto, harmonizando materiais e iluminação."}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Guarda-Roupas e Closets Planejados", "description": "Guarda-roupas e closets sob medida com organização personalizada e LED integrado."}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Cozinhas Planejadas", "description": "Cozinhas robustas com materiais resistentes à umidade e ferragens de primeira linha."}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Móveis para Banheiro", "description": "Mobiliário resistente à umidade com design sofisticado."}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Mobiliário Comercial", "description": "Balcões e móveis de escritório ergonômicos projetados para impressionar."}}
        ]
      }
    }
    </script>

    <!-- HowTo Schema (Process Section) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "HowTo",
      "name": "Como funciona o processo de móveis planejados na Frota Móveis",
      "description": "Processo completo de criação de móveis planejados em Cascavel-PR: do orçamento gratuito à instalação profissional.",
      "step": [
        {
          "@type": "HowToStep",
          "position": "1",
          "name": "Consultoria Gratuita",
          "text": "Reunião inicial para entender suas necessidades, ambiente e estilo. Visita técnica gratuita em Cascavel e toda a região Oeste do Paraná."
        },
        {
          "@type": "HowToStep",
          "position": "2",
          "name": "Projeto 3D",
          "text": "Apresentação do projeto em renderizações 3D realistas para aprovação. Você pode ajustar acabamentos, madeiras e ferragens antes da produção."
        },
        {
          "@type": "HowToStep",
          "position": "3",
          "name": "Produção",
          "text": "Fabricação meticulosa na nossa marcenaria em Cascavel-PR com materiais premium: MDF das marcas Arauco, Duratex, Guararapes e Sudati, ferragens Blum e Häfele."
        },
        {
          "@type": "HowToStep",
          "position": "4",
          "name": "Instalação",
          "text": "Montagem final no local feita pelos nossos especialistas. Entrega completa com transporte incluído em Cascavel e toda a região Oeste do Paraná."
        }
      ]
    }
    </script>

    <!-- FAQPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Como funciona a consultoria para móveis planejados em Cascavel-PR?",
          "acceptedAnswer": {"@type": "Answer", "text": "Iniciamos com uma visita técnica gratuita em Cascavel e toda a região Oeste do Paraná para avaliar o ambiente, tirar medidas exatas e entender suas ideias de design. O objetivo é alinhar estilo, orçamento e necessidades reais."}
        },
        {
          "@type": "Question",
          "name": "Fazem projetos 3D para cozinhas planejadas e guarda-roupas?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Apresentamos um projeto 3D realista e detalhado antes de iniciar qualquer produção. Assim você visualiza exatamente como ficará o móvel planejado no seu ambiente. Só iniciamos a fabricação após sua aprovação total."}
        },
        {
          "@type": "Question",
          "name": "Qual é o prazo de entrega para móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "O prazo depende da complexidade do projeto. Peças individuais levam em média 3 a 5 semanas. Projetos completos de cozinhas planejadas e closets demoram de 6 a 8 semanas, sempre garantindo excelência nos acabamentos."}
        },
        {
          "@type": "Question",
          "name": "Como garantem o encaixe perfeito dos móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "Por meio de um levantamento técnico detalhado no local em Cascavel e região. Avaliamos desníveis, esquadrias e instalações, permitindo que a fabricação seja 100% sob medida para o seu imóvel, sem margens de erro."}
        },
        {
          "@type": "Question",
          "name": "Posso alterar os detalhes após ver o projeto 3D?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Você pode ajustar acabamentos, madeiras, ferragens ou organização interna durante a fase de revisão do 3D. A fabricação só é iniciada quando você estiver totalmente satisfeito com o projeto final."}
        },
        {
          "@type": "Question",
          "name": "Como é elaborado o orçamento para móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "Nossos orçamentos são justos, detalhados e 100% transparentes, sem custos ocultos. Cada material escolhido é justificado na proposta final apresentada após a aprovação do projeto."}
        },
        {
          "@type": "Question",
          "name": "Atendem em Toledo, Foz do Iguaçu e outras cidades da região?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Nossa marcenaria está em Cascavel-PR, o que nos permite atender com rapidez e eficiência toda a região Oeste do Paraná: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia e cidades vizinhas."}
        },
        {
          "@type": "Question",
          "name": "Qual é o investimento em um projeto de móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "Não exigimos valor mínimo. Atendemos desde a fabricação de um único móvel de TV até o planejamento completo de uma residência. O orçamento se adapta à escolha dos materiais: MDF hidrófugo, MDF lacado ou acabamentos premium."}
        },
        {
          "@type": "Question",
          "name": "O transporte e montagem estão incluídos no valor?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Todas as propostas da Frota Móveis são entregues de forma completa. Os custos de transporte e montagem especializada na sua residência já estão integrados no valor final aprovado."}
        },
        {
          "@type": "Question",
          "name": "Garantem transparência absoluta no preço final?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. O valor orçado e cobrado é exatamente o acordado após a definição dos materiais, ferragens e portas escolhidas. Qualquer alteração gera um orçamento revisado, sem surpresas."}
        },
        {
          "@type": "Question",
          "name": "Quais materiais são usados nos móveis planejados de alto padrão?",
          "acceptedAnswer": {"@type": "Answer", "text": "Não usamos aglomerados de baixa qualidade. Nossa base é MDF e MDF hidrófugo das marcas Arauco, Duratex, Guararapes e Sudati, garantindo frentes lisas, fosco ou texturizadas imunes ao desgaste prematuro."}
        },
        {
          "@type": "Question",
          "name": "Usam ferragens soft-close nas cozinhas planejadas?",
          "acceptedAnswer": {"@type": "Answer", "text": "O soft-close é nosso padrão obrigatório. Utilizamos exclusivamente sistemas de deslizamento e fechamento magnético de marcas líderes mundiais (BLUM, Häfele e Emuca), garantindo durabilidade para milhões de aberturas silenciosas."}
        },
        {
          "@type": "Question",
          "name": "Fazem lacagem premium e painéis em vidro temperado?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Nosso ponto forte é o lacado ultra-fosco ou alto-brilho com secagem especial. Executamos divisórias de luxo combinando alumínio fino, vidro bronze ou fumê e iluminação LED integrada para closets e cozinhas impactantes."}
        },
        {
          "@type": "Question",
          "name": "Garantem resistência à umidade nos móveis de banheiro e cozinha?",
          "acceptedAnswer": {"@type": "Answer", "text": "Com certeza. O mobiliário de banheiro e cozinha sofre bastante com a umidade. Por isso, utilizamos MDF hidrófugo altamente selado e fundos protetores de alumínio na área da cuba, garantindo durabilidade total."}
        },
        {
          "@type": "Question",
          "name": "Trabalham com tampos de mármore e pedra na cozinha?",
          "acceptedAnswer": {"@type": "Answer", "text": "Trabalhamos em parceria com marmoristas de excelência em Cascavel (Silestone, Dekton, mármore ou granito). A Frota Móveis estrutura a base de forma ultrarresistente nas ilhas para acomodar com segurança essas pedras pesadas."}
        },
        {
          "@type": "Question",
          "name": "Como fazem o levantamento do espaço para os móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "Levamos instrumentação técnica a laser até sua casa ou apartamento em Cascavel e região. Mapeamos com precisão as paredes, tomadas, pontos de luz e rodapés antes de projetar e fabricar as peças de embutir."}
        },
        {
          "@type": "Question",
          "name": "A montagem dos móveis planejados é feita pela própria Frota Móveis?",
          "acceptedAnswer": {"@type": "Answer", "text": "Nunca terceirizamos a montagem para equipes informais. Os técnicos que fazem os cortes na nossa produção acompanham a montagem na sua residência, garantindo precisão, rigor nos detalhes e total cuidado com o ambiente."}
        },
        {
          "@type": "Question",
          "name": "A instalação dos móveis planejados causa muito entulho e pó?",
          "acceptedAnswer": {"@type": "Answer", "text": "Ao contrário das marcenarias convencionais, minimizamos isso ao máximo. Até 95% do armário ou cozinha chega à sua casa já cortado, lacado e limpo. No local, apenas o alinhamento final."}
        },
        {
          "@type": "Question",
          "name": "Como protegem o ambiente da casa durante a montagem?",
          "acceptedAnswer": {"@type": "Answer", "text": "Protegemos pisos e móveis existentes com mantas isoladoras. Todo o fluxo de painéis grandes pela sala e quarto é feito com extremo cuidado, evitando arranhões em paredes ou batentes de porta."}
        },
        {
          "@type": "Question",
          "name": "O espaço precisa estar vazio para a equipe iniciar a montagem?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim, recomendamos que a área específica da cozinha ou guarda-roupa embutido esteja livre e organizada para o acesso amplo da equipe. Ao final da montagem, garantimos a limpeza completa do interior de portas e painéis."}
        },
        {
          "@type": "Question",
          "name": "Qual é a garantia dos móveis planejados e cozinhas da Frota Móveis?",
          "acceptedAnswer": {"@type": "Answer", "text": "Oferecemos 3 anos de garantia em todos os projetos de marcenaria e guarda-roupas sob medida. Utilizamos matérias-primas de excelência que previnem defeitos estruturais e garantem longa durabilidade."}
        },
        {
          "@type": "Question",
          "name": "Têm serviço de pós-venda em Cascavel e região?",
          "acceptedAnswer": {"@type": "Answer", "text": "Sim. Prestamos assistência técnica direta e ágil a todos os nossos clientes em Cascavel e no Oeste do Paraná. Se houver qualquer problema, nos deslocamos ao local para resolver."}
        },
        {
          "@type": "Question",
          "name": "O que acontece se as portas ou gavetas desregularem?",
          "acceptedAnswer": {"@type": "Answer", "text": "A madeira e as dobradiças podem sofrer pequenos ajustes naturais no primeiro ano. Basta entrar em contato com a Frota Móveis e nossa equipe técnica fará a calibração rápida das ferragens (BLUM/Häfele) sem custo adicional."}
        },
        {
          "@type": "Question",
          "name": "Qual é a vida útil de uma cozinha planejada ou closet de alto padrão?",
          "acceptedAnswer": {"@type": "Answer", "text": "Os móveis planejados fabricados pela Frota Móveis são projetados para durar décadas. Usamos painéis sólidos, acabamentos rigorosos e métodos de união invisíveis que não cedem com o peso do uso rotineiro."}
        },
        {
          "@type": "Question",
          "name": "Como limpar os acabamentos lacados ou MDF dos móveis planejados?",
          "acceptedAnswer": {"@type": "Answer", "text": "A manutenção é muito simples. Use apenas um pano macio (tipo microfibra) umedecido em água com um pouco de sabão neutro. Nunca utilize esponjas abrasivas ou produtos químicos fortes."}
        }
      ]
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    </noscript>

    <!-- Font Awesome -->
    
    <noscript>
        
    </noscript>

    <!-- Custom CSS -->
    <link rel="preload" href="styles.css?v=2.0" as="style">
    <link rel="stylesheet" href="styles.css?v=2.0">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Preload LCP Hero Image -->
    <link rel="preload" href="hero.webp" as="image" type="image/webp" fetchpriority="high">

    <!-- FontAwesome SVG replacement CSS -->
    <style>
        svg.fa-icon {
            display: inline-block;
            height: 1em;
            width: 1em;
            vertical-align: -0.125em;
            fill: currentColor;
        }
        .fa-spin {
            animation: fa-spin 2s linear infinite;
        }
        @keyframes fa-spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <!-- FontAwesome SVG Sprite -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<defs>
  <symbol id="fa-globe" viewBox="0 0 512 512">
    <path fill="currentColor" d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z"></path>
  </symbol>
  <symbol id="fa-chevron-down" viewBox="0 0 512 512">
    <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
  </symbol>
  <symbol id="fa-chevron-left" viewBox="0 0 320 512">
    <path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path>
  </symbol>
  <symbol id="fa-chevron-right" viewBox="0 0 320 512">
    <path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
  </symbol>
  <symbol id="fa-expand" viewBox="0 0 448 512">
    <path fill="currentColor" d="M32 32C14.3 32 0 46.3 0 64v96c0 17.7 14.3 32 32 32s32-14.3 32-32V96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7 14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H64V352zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32h64v64c0 17.7 14.3 32 32 32s32-14.3 32-32V64c0-17.7-14.3-32-32-32H320zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32V352z"></path>
  </symbol>
  <symbol id="fa-quote-left" viewBox="0 0 448 512">
    <path fill="currentColor" d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"></path>
  </symbol>
  <symbol id="fa-user" viewBox="0 0 448 512">
    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
  </symbol>
  <symbol id="fa-phone" viewBox="0 0 512 512">
    <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
  </symbol>
  <symbol id="fa-whatsapp" viewBox="0 0 448 512">
    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
  </symbol>
  <symbol id="fa-envelope" viewBox="0 0 512 512">
    <path fill="currentColor" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"></path>
  </symbol>
  <symbol id="fa-location-dot" viewBox="0 0 384 512">
    <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
  </symbol>
  <symbol id="fa-plus" viewBox="0 0 448 512">
    <path fill="currentColor" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
  </symbol>
  <symbol id="fa-clock" viewBox="0 0 512 512">
    <path fill="currentColor" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
  </symbol>
  <symbol id="fa-facebook-f" viewBox="0 0 320 512">
    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
  </symbol>
  <symbol id="fa-instagram" viewBox="0 0 448 512">
    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
  </symbol>
  <symbol id="fa-star" viewBox="0 0 576 512">
    <path fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
  </symbol>
  <symbol id="fa-google" viewBox="0 0 488 512">
    <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
  </symbol>
  <symbol id="fa-headset" viewBox="0 0 512 512">
    <path fill="currentColor" d="M256 48C141.1 48 48 141.1 48 256v40c0 13.3-10.7 24-24 24s-24-10.7-24-24V256C0 114.6 114.6 0 256 0S512 114.6 512 256V400.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24H240c-26.5 0-48-21.5-48-48s21.5-48 48-48h32c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40V256c0-114.9-93.1-208-208-208zM144 208h16c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H144c-35.3 0-64-28.7-64-64V272c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64v48c0 35.3-28.7 64-64 64H352c-17.7 0-32-14.3-32-32V240c0-17.7 14.3-32 32-32h16z"></path>
  </symbol>
  <symbol id="fa-xmark" viewBox="0 0 384 512">
    <path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
  </symbol>
  <symbol id="fa-paper-plane" viewBox="0 0 512 512">
    <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
  </symbol>
  <symbol id="fa-arrow-right" viewBox="0 0 448 512">
    <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
  </symbol>
  <symbol id="fa-spinner" viewBox="0 0 512 512">
    <path fill="currentColor" d="M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z"></path>
  </symbol>
  <symbol id="fa-check" viewBox="0 0 448 512">
    <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
  </symbol>
</defs>
</svg>


    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="#" class="logo" aria-label="Ir para o topo da página inicial">
                <img src="logofrota.svg" alt="Frota Móveis Planejados" style="height:60px;width:auto;display:block;">
            </a>

            <!-- Desktop Nav -->
            <nav class="desktop-nav">
                <ul>
                    <li><a href="#hero" data-i18n="nav_home">Página Inicial</a></li>
                    <li><a href="#about" data-i18n="nav_about">Sobre</a></li>
                    <li><a href="#services" data-i18n="nav_services">Serviços</a></li>
                    <li><a href="#portfolio" data-i18n="nav_portfolio">Transformações</a></li>
                    <li><a href="#contact" data-i18n="nav_contact">Contacto</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <!-- Language Selector -->
                <div class="lang-selector">
                    <button class="lang-btn" id="lang-btn">
                        <svg class="fa-icon fa-globe"  aria-hidden="true"><use href="#fa-globe"></use></svg> <span id="current-lang">PT</span> <svg class="fa-icon fa-chevron-down"  aria-hidden="true"><use href="#fa-chevron-down"></use></svg>
                    </button>
                    <ul class="lang-dropdown" id="lang-dropdown">
                        <li><a href="#" data-lang="pt">Português (PT)</a></li>
                        <li><a href="#" data-lang="en">English (EN)</a></li>
                        <li><a href="#" data-lang="es">Español (ES)</a></li>
                        <li><a href="#" data-lang="fr">Français (FR)</a></li>
                        <li><a href="#" data-lang="de">Deutsch (DE)</a></li>
                    </ul>
                </div>

                <a href="#contact" class="btn btn-primary btn-sm hidden-mobile"
                    data-i18n="btn_nav_contact">Contacte-nos</a>

                <!-- Hamburger Menu Toggle -->
                <button class="menu-toggle" aria-label="Toggle menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <nav>
                <ul>
                    <li><a href="#hero" class="mobile-link" data-i18n="nav_home">Página Inicial</a></li>
                    <li><a href="#about" class="mobile-link" data-i18n="nav_about">Sobre</a></li>
                    <li><a href="#services" class="mobile-link" data-i18n="nav_services">Serviços</a></li>
                    <li><a href="#portfolio" class="mobile-link" data-i18n="nav_portfolio">Transformações</a></li>
                    <li><a href="#contact" class="mobile-link" data-i18n="nav_contact">Contacto</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-footer">
                <a href="#contact" class="btn btn-primary full-width" data-i18n="btn_nav_contact">Contacte-nos</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <img src="hero.webp" alt="Interior de casa moderna com móveis desenhados à medida" class="hero-bg" fetchpriority="high" loading="eager" decoding="async" loading="lazy">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <span class="subtitle animate-on-scroll" data-i18n="hero_subtitle">ESPECIALISTAS EM MÓVEIS POR
                        MEDIDA</span>
                    <h1 class="animate-on-scroll delay-1">
                        <span data-i18n="hero_title_1">Transforme Seus Espaços em</span><br>
                        <em class="highlight"><span data-i18n="hero_title_2">Obras de Arte</span> <span
                                data-i18n="hero_title_3">Personalizadas</span></em>
                    </h1>
                    <p class="animate-on-scroll delay-2" data-i18n="hero_desc">Móveis sob medida que unem
                        funcionalidade, design e qualidade.<br>Cada projeto é único, tal como o seu espaço.</p>
                    <div class="hero-buttons animate-on-scroll delay-3">
                        <a href="#portfolio" class="btn btn-primary" data-i18n="btn_portfolio">Ver Portfólio</a>
                        <a href="#contact" class="btn btn-outline" data-i18n="btn_hero_contact">Fale Connosco</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section about">
            <div class="container about-container">
                <div class="about-image animate-on-scroll">
                    <img src="frota empresa.jpg" alt="Frota Móveis Planejados - Nossa Empresa" loading="lazy">
                </div>
                <div class="about-content animate-on-scroll delay-1">
                    <span class="subtitle" data-i18n="about_subtitle">Quem Somos</span>
                    <h2><span data-i18n="about_title_text">A Nossa</span> <em class="highlight"
                            data-i18n="about_title_em">História</em></h2>
                    <p data-i18n="about_text_1">A Frota Móveis Planejados nasce da união de duas gerações apaixonadas pela marcenaria de excelência. Silo Frota dos Anjos, o fundador, com décadas de experiência artesanal em marcenaria de alto padrão, construiu uma reputação sólida em Cascavel e na região Oeste do Paraná.</p>
                    <p data-i18n="about_text_2">Silas Frota dos Anjos Neto trouxe inovação, gestão moderna e tecnologia para o negócio familiar, combinando a tradição da marcenaria artesanal com design 3D, materiais de ponta e processos eficientes. Juntos, garantem que cada detalhe — do acabamento perfeito à funcionalidade inteligente — supere as expectativas dos clientes.</p>
                    <p data-i18n="about_text_3">Em nossa marcenaria em Cascavel-PR, criamos projetos únicos de móveis planejados. Com muitos projetos entregues e satisfação garantida, atendemos toda a região Oeste do Paraná: Cascavel, Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina e cidades vizinhas. Utilizamos MDF das marcas Arauco, Duratex, Guararapes e Sudati, ferragens de primeira linha (Blum, Häfele) em um processo 100% transparente: do projeto personalizado à instalação profissional.</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section services bg-light">
            <div class="container">
                <div class="section-header text-center animate-on-scroll">
                    <span class="subtitle" data-i18n="services_subtitle">O Que Fazemos</span>
                    <h2><span data-i18n="services_title_text">Os Nossos</span> <em class="highlight"
                            data-i18n="services_title_em">Serviços</em></h2>
                </div>

                <div class="services-grid">
                    <!-- Service 1 -->
                    <div class="service-card animate-on-scroll delay-1">
                        <div class="service-image-container">
                            <img src="moveis_medida.webp" alt="Móveis por Medida" class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_1_title">Móveis por Medida</h3>
                        <p data-i18n="srv_1_desc">Peças únicas desenhadas ao milímetro. Garantimos aproveitamento total
                            e acabamentos de excelência da marcenaria tradicional.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card animate-on-scroll delay-2">
                        <div class="service-image-container">
                            <img src="design_interiores.webp"
                                alt="Projeto de design de interiores 3D com visualizaÃ§Ã£o realista - Frota Móveis"
                                class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_2_title">Design de Interiores</h3>
                        <p data-i18n="srv_2_desc">Visualização 3D completa do seu projeto. Harmonizamos materiais e
                            iluminação para unir estética e funcionalidade.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card animate-on-scroll delay-3">
                        <div class="service-image-container">
                            <img src="roupeiro_closet.webp"
                                alt="Roupeiro planeado com organizaÃ§Ã£o personalizada e LED integrado - Frota Móveis"
                                class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_3_title">Roupeiros e Closets por Medida</h3>
                        <p data-i18n="srv_3_desc">Roupeiros e closets de luxo com organização personalizada. Gavetas com
                            amortecimento e LED integrado para máxima praticidade.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card animate-on-scroll delay-1">
                        <div class="service-image-container">
                            <img src="cozinha_planeada.webp"
                                alt="Cozinha planeada com materiais hidrÃ³fugos e ferragens Blum premium"
                                class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_4_title">Cozinhas Planeadas</h3>
                        <p data-i18n="srv_4_desc">Cozinhas robustas com materiais hidrófugos e ferragens de topo. Unimos
                            resistência e design, do rústico ao minimalista.</p>
                    </div>

                    <!-- Service 5 -->
                    <div class="service-card animate-on-scroll delay-2">
                        <div class="service-image-container">
                            <img src="mobiliario_wc.webp" alt="Mobiliário de Casa de Banho" class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_5_title">Mobiliário de Casa de Banho</h3>
                        <p data-i18n="srv_5_desc">Mobiliário resistente à humidade com design sofisticado. Soluções
                            duráveis e inteligentes para a organização do seu WC.</p>
                    </div>

                    <!-- Service 6 -->
                    <div class="service-card animate-on-scroll delay-3">
                        <div class="service-image-container">
                            <img src="mobiliario_comercial.webp" alt="Mobiliário Comercial" class="service-image" loading="lazy">
                        </div>
                        <h3 data-i18n="srv_6_title">Mobiliário Comercial</h3>
                        <p data-i18n="srv_6_desc">Balcões e mobiliário de escritório que elevam a sua marca. Soluções
                            ergonómicas desenhadas para impressionar.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="section portfolio">
            <div class="container">
                <div class="section-header text-center animate-on-scroll">
                    <span class="subtitle" data-i18n="port_subtitle">O Nosso Trabalho</span>
                    <h2><span data-i18n="port_title_text">Transformações</span> <em class="highlight"
                            data-i18n="port_title_em">Realizadas</em></h2>
                    <p data-i18n="port_desc">Veja os nossos projetos recentes e surpreenda-se com os resultados.</p>
                </div>

                <div class="portfolio-grid">
                    <div class="portfolio-card animate-on-scroll delay-1">
                        <div class="portfolio-slider">
                            <img src="sala_depois.webp"
                                alt="MÃ³vel de sala 3 em 1 com TV, lareira e bar em madeira e mÃ¡rmore - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="sala_antes.webp"
                                    alt="Sala de estar antes da transformaÃ§Ã£o - espaÃ§o original sem mobiliÃ¡rio"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_1_title">Móvel de Sala 3-em-1: TV, Lareira e Bar</h3>
                            <p data-i18n="port_1_desc">Estante à medida em madeira e mármore que une entretenimento,
                                conforto e sofisticação.</p>
                        </div>
                    </div>

                    <div class="portfolio-card animate-on-scroll delay-2">
                        <div class="portfolio-slider">
                            <img src="cozinha_verde_depois.webp"
                                alt="Cozinha moderna verde sÃ¡lvia com ilha em mÃ¡rmore e painel ripado iluminado - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="cozinha_verde_antes.webp"
                                    alt="Cozinha antes da transformaÃ§Ã£o - espaÃ§o original"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_2_title">Cozinha Moderna Verde Sálvia</h3>
                            <p data-i18n="port_2_desc">Ilha em mármore e painel ripado iluminado.</p>
                        </div>
                    </div>

                    <div class="portfolio-card animate-on-scroll delay-3">
                        <div class="portfolio-slider">
                            <img src="roupeiro_janela_depois.webp"
                                alt="Roupeiro planeado com Ã¡rea de janela, gavetas centrais e portas laterais - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="roupeiro_janela_antes.webp"
                                    alt="Quarto antes da instalaÃ§Ã£o do roupeiro planeado"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_3_title">Roupeiro Planeado com Área de Janela</h3>
                            <p data-i18n="port_3_desc">Solução de arrumação otimizada com gavetas centrais e portas
                                laterais, perfeita para aproveitar cada centímetro do seu espaço.</p>
                        </div>
                    </div>

                    <div class="portfolio-card animate-on-scroll delay-4">
                        <div class="portfolio-slider">
                            <img src="escritorio_executivo_depois.webp"
                                alt="EscritÃ³rio executivo planeado com tecnologia e sofisticaÃ§Ã£o - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="escritorio_executivo_antes.webp"
                                    alt="EscritÃ³rio antes da transformaÃ§Ã£o com mobiliÃ¡rio antigo"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_4_title">Escritório Executivo Planeado</h3>
                            <p data-i18n="port_4_desc">O equilíbrio perfeito entre tecnologia, conforto e sofisticação.
                            </p>
                        </div>
                    </div>

                    <!-- Extra Project 1 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="cozinha_madeira_depois.webp"
                                alt="Cozinha moderna em madeira e mÃ¡rmore com ilha central ripada - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="cozinha_madeira_antes.webp"
                                    alt="Cozinha antes da transformaÃ§Ã£o - espaÃ§o vazio para projeto"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_6_title">Cozinha Moderna em Madeira e Mármore</h3>
                            <p data-i18n="port_6_desc">Inspire-se com este design sofisticado que une armários
                                planejados, ilha central com acabamento ripado e a elegância atemporal dos
                                revestimentos claros.</p>
                        </div>
                    </div>

                    <!-- Extra Project 2 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="home_office_depois.webp"
                                alt="Home office moderno com toque industrial, prateleiras suspensas e marcenaria inteligente"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="home_office_antes.webp"
                                    alt="EspaÃ§o antes da instalaÃ§Ã£o do home office sob medida"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_7_title">Home Office Moderno com Toque Industrial</h3>
                            <p data-i18n="port_7_desc">Explore ideias de prateleiras suspensas, parede de cimento
                                queimado e marcenaria inteligente para otimizar seu espaço de trabalho.</p>
                        </div>
                    </div>

                    <!-- Extra Project 3 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="armario_embutido_depois.webp"
                                alt="ArmÃ¡rio com escrivaninha embutida em design minimalista - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="armario_embutido_antes.webp"
                                    alt="EspaÃ§o antes da instalaÃ§Ã£o do armÃ¡rio embutido sob medida"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_8_title">Armário com Escrivaninha Embutida</h3>
                            <p data-i18n="port_8_desc">Minimalismo e funcionalidade em marcenaria sob medida.</p>
                        </div>
                    </div>

                    <!-- Extra Project 4 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="painel_tv_depois.webp"
                                alt="Painel para TV suspenso minimalista com LED e nichos decorativos - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="painel_tv_antes.webp"
                                    alt="Sala antes da instalaÃ§Ã£o do painel de TV suspenso"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_9_title">Painel para TV Suspenso Minimalista com LED</h3>
                            <p data-i18n="port_9_desc">O equilíbrio perfeito entre funcionalidade e luxo. Valorize sua
                                sala de estar com este móvel contemporâneo, combinando texturas naturais e nichos
                                decorativos.</p>
                        </div>
                    </div>

                    <!-- Extra Project 5 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="home_theater_depois.webp"
                                alt="Home theater planejado amadeirado com iluminaÃ§Ã£o embutida e nichos laterais"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="home_theater_antes.webp"
                                    alt="Sala antes da instalaÃ§Ã£o do home theater sob medida"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_10_title">Home Theater Planejado Amadeirado</h3>
                            <p data-i18n="port_10_desc">Sofisticação com iluminação embutida e nichos laterais.</p>
                        </div>
                    </div>

                    <!-- Extra Project 6 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="dormitorio_iluminado_depois.webp"
                                alt="DormitÃ³rio moderno com iluminaÃ§Ã£o integrada e cabeceira sob medida - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="dormitorio_iluminado_antes.webp"
                                    alt="Quarto antes da transformaÃ§Ã£o com mobiliÃ¡rio de dormitÃ³rio"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_11_title">Dormitório Moderno com Iluminação</h3>
                            <p data-i18n="port_11_desc">Design compacto e funcional com cabeceira integrada.</p>
                        </div>
                    </div>

                    <!-- Extra Project 7 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="minimalismo_ripado_depois.webp"
                                alt="MÃ³vel ripado minimalista para otimizaÃ§Ã£o de espaÃ§o sob medida - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="minimalismo_ripado_antes.webp"
                                    alt="EspaÃ§o antes da instalaÃ§Ã£o do mÃ³vel ripado minimalista"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_12_title">Minimalismo Ripado</h3>
                            <p data-i18n="port_12_desc">Sofisticação e otimização de espaço sob medida.</p>
                        </div>
                    </div>

                    <!-- Extra Project 8 -->
                    <div class="portfolio-card extra-project" style="display: none;">
                        <div class="portfolio-slider">
                            <img src="gabinete_suspenso_depois.webp"
                                alt="Gabinete suspenso minimalista com cuba dupla e acabamento premium - Frota Móveis"
                                class="slider-img slider-img-after" loading="lazy">
                            <span class="slider-badge badge-after" data-i18n="badge_after">DEPOIS</span>

                            <div class="slider-before-wrapper">
                                <img src="gabinete_suspenso_antes.webp"
                                    alt="Casa de banho antes da instalaÃ§Ã£o do gabinete suspenso"
                                    class="slider-img slider-img-before" loading="lazy">
                                <span class="slider-badge badge-before" data-i18n="badge_before">ANTES</span>
                            </div>

                            <input type="range" min="0" max="100" value="50" class="slider-input" aria-label="Controlador deslizante de comparação Antes e Depois">
                            <div class="slider-divider">
                                <div class="slider-handle">
                                    <svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg>
                                </div>
                            </div>
                            <button class="portfolio-zoom-btn" aria-label="Ampliar"><svg class="fa-icon fa-expand"  aria-hidden="true"><use href="#fa-expand"></use></svg></button>
                        </div>
                        <div class="portfolio-info-box">
                            <h3 data-i18n="port_13_title">Gabinete Suspenso Minimalista</h3>
                            <p data-i18n="port_13_desc">Design flutuante com cuba dupla e acabamento premium.</p>
                        </div>
                    </div>

                    <div class="portfolio-item portfolio-more-actions align-center"
                        style="grid-column: 1 / -1; display: flex; justify-content: center; padding: 20px 0;">
                        <button id="btn-more-projects" class="btn-text-underline" data-i18n="port_btn_more">Ver Mais
                            Projetos</button>
                    </div>

                    <div class="portfolio-item portfolio-cta animate-on-scroll delay-5"
                        style="display: flex; align-items: center; justify-content: center; background: var(--clr-primary); padding: 30px;">
                        <div style="text-align: center; color: var(--clr-white);">
                            <h3 style="font-size: 2rem; margin-bottom: 10px; font-family: var(--font-heading); color: white;"
                                data-i18n="port_5_title">O seu espaço é o próximo?</h3>
                            <p style="font-size: 1.1rem; margin-bottom: 25px; opacity: 0.9;" data-i18n="port_5_desc">
                                Vamos transformar a sua visão em realidade com o toque de luxo que a sua casa merece.
                            </p>
                            <a href="#contact" class="btn btn-outline portfolio-cta-btn"
                                style="border-color: white; color: white;" data-i18n="port_5_btn">AGENDAR
                                CONSULTORIA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Process Section -->
        <section id="process" class="section process bg-dark text-white">
            <div class="container">
                <div class="section-header text-center animate-on-scroll">
                    <span class="subtitle" data-i18n="process_subtitle">Metodologia</span>
                    <h2 class="text-white"><span data-i18n="process_title_text">O Nosso</span> <em class="highlight"
                            data-i18n="process_title_em">Processo</em></h2>
                </div>

                <div class="process-carousel-wrapper">
                    <button class="carousel-btn prev-btn process-prev-btn" aria-label="Anterior"><svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg></button>
                    <button class="carousel-btn next-btn process-next-btn" aria-label="Próximo"><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg></button>
                    <div class="process-timeline" id="processTimeline">
                        <!-- Step 1 -->
                        <div class="process-step animate-on-scroll delay-1">
                            <div class="process-icon">01</div>
                            <h3 data-i18n="proc_1_title">Consultoria</h3>
                            <p data-i18n="proc_1_desc">Reunião inicial para entender as suas necessidades, espaço e
                                estilo.
                            </p>
                        </div>

                        <!-- Step 2 -->
                        <div class="process-step animate-on-scroll delay-2">
                            <div class="process-icon">02</div>
                            <h3 data-i18n="proc_2_title">Design 3D</h3>
                            <p data-i18n="proc_2_desc">Apresentação do projeto em renderizações realistas para
                                aprovação.
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="process-step animate-on-scroll delay-3">
                            <div class="process-icon">03</div>
                            <h3 data-i18n="proc_3_title">Produção</h3>
                            <p data-i18n="proc_3_desc">Fabrico meticuloso na nossa marcenaria com materiais premium.</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="process-step animate-on-scroll delay-4">
                            <div class="process-icon">04</div>
                            <h3 data-i18n="proc_4_title">Instalação</h3>
                            <p data-i18n="proc_4_desc">Montagem final no local feita pelos nossos especialistas.</p>
                        </div>
                    </div>
                </div>
                <div class="process-dots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                    <span class="dot" data-index="3"></span>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="section testimonials">
            <div class="container">
                <div class="section-header text-center animate-on-scroll">
                    <span class="subtitle" data-i18n="test_subtitle">Feedback</span>
                    <h2><span data-i18n="test_title_text">O Que Dizem os Nossos</span> <em class="highlight"
                            data-i18n="test_title_em">Clientes</em></h2>
                </div>

                <div class="testimonials-wrapper">
                    <button class="carousel-btn prev-btn" aria-label="Anterior"><svg class="fa-icon fa-chevron-left"  aria-hidden="true"><use href="#fa-chevron-left"></use></svg></button>
                    <button class="carousel-btn next-btn" aria-label="Próximo"><svg class="fa-icon fa-chevron-right"  aria-hidden="true"><use href="#fa-chevron-right"></use></svg></button>
                    <div class="testimonials-carousel" id="testimonialsCarousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card animate-on-scroll delay-1">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_1_desc">"Sempre a tentar perceber o que era
                                pretendido, sem dificuldade de aceitar alterações/críticas. Entregou perfeitamente o
                                pretendido, em menos tempo que o previsto e sempre com simpatia e profissionalismo!!"
                            </p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Marta Cristina</h3>
                                    <span>Cascavel, PR</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card animate-on-scroll delay-2">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_2_desc">"O profissional demonstrou excelência,
                                criatividade e dedicação ao projeto. Atento aos detalhes e aos interesses do cliente,
                                superou todas as expectativas com propostas bem fundamentadas e sugestões pertinentes."
                            </p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Telma Prates</h3>
                                    <span>Toledo, PR</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card animate-on-scroll delay-3">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_3_desc">"Excelente profissional. Completou o
                                projeto
                                do quarto num fim de semana com todos os detalhes solicitados. Trabalho de qualidade,
                                rápido, com grande disponibilidade e paciência. Recomendo."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Fernanda Souza</h3>
                                    <span>Foz do Iguaçu, PR</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card animate-on-scroll delay-1">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_4_desc">"Móveis muito bem acabados e de
                                qualidade
                                superior. Recomendo muito. Além do melhor atendimento que já tivemos."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Eduardo Hadermeck</h3>
                                    <span>Cascavel, PR</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card animate-on-scroll delay-2">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_5_desc">"Recomendo muito! Tudo fluiu da melhor
                                forma
                                desde o primeiro contato, projeto e entrega. Material e serviço de muita qualidade."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Renata Zanferrari Hadermeck</h3>
                                    <span>M. C. Rondon, PR</span>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="testimonial-card animate-on-scroll delay-3">
                            <div class="quote-icon"><svg class="fa-icon fa-quote-left"  aria-hidden="true"><use href="#fa-quote-left"></use></svg></div>
                            <p class="testimonial-text" data-i18n="test_6_desc">"Super profissionais, atentos aos
                                pormenores
                                e muito atenciosos. Recomendo."</p>
                            <div class="testimonial-author">
                                <div class="author-avatar"><svg class="fa-icon fa-user"  aria-hidden="true"><use href="#fa-user"></use></svg></div>
                                <div class="author-info">
                                    <h3>Ana Soares Dias</h3>
                                    <span>Palotina, PR</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-dots">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
                <span class="dot" data-index="3"></span>
                <span class="dot" data-index="4"></span>
                <span class="dot" data-index="5"></span>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section contact">
            <div class="container contact-container">
                <div class="contact-info animate-on-scroll">
                    <span class="subtitle" data-i18n="contact_subtitle">Fale Connosco</span>
                    <h2><span data-i18n="contact_title_text">Inicie a sua</span> <em class="highlight"
                            data-i18n="contact_title_em">Transformação</em></h2>
                    <p data-i18n="contact_desc">Preencha o formulário abaixo ou entre em contacto direto através do
                        WhatsApp para solicitar o seu orçamento.</p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon"><svg class="fa-icon fa-phone"  aria-hidden="true"><use href="#fa-phone"></use></svg></div>
                            <div>
                                <span class="contact-label" data-i18n="contact_phone_label">Telefone</span>
                                <a href="tel:+554530960906">+55 45 3096-0906</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon"><svg class="fa-icon fa-whatsapp"  aria-hidden="true"><use href="#fa-whatsapp"></use></svg></div>
                            <div>
                                <span class="contact-label" data-i18n="contact_whatsapp_label">WhatsApp</span>
                                <a href="https://wa.me/554599180019?text=Olá%2C%20vim%20através%20do%20site%20e%20gostaria%20de%20mais%20informações%20sobre%20móveis%20planejados"
                                    target="_blank" rel="noopener noreferrer">+55 45 9918-0019</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon"><svg class="fa-icon fa-envelope"  aria-hidden="true"><use href="#fa-envelope"></use></svg></div>
                            <div>
                                <span class="contact-label" data-i18n="contact_email_label">Email</span>
                                <a href="mailto:comercial@moveisfrota.com.br">comercial@moveisfrota.com.br</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon"><svg class="fa-icon fa-location-dot"  aria-hidden="true"><use href="#fa-location-dot"></use></svg></div>
                            <div>
                                <span class="contact-label" data-i18n="contact_address_label">Morada</span>
                                <a href="https://www.google.com/maps/search/?api=1&query=Rua+Cláudia+Galante+Padovani+1277+Santa+Felicidade+Cascavel+PR"
                                    target="_blank" rel="noopener noreferrer">Rua Cláudia Galante Padovani, 1277 B - Santa Felicidade - Cascavel, PR</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper animate-on-scroll delay-1">
                    <form class="contact-form" id="frota-contact-form">
                        <!-- CSRF Token (server-generated) -->
                        <input type="hidden" name="_csrf" id="csrf-token" value="<?php echo htmlspecialchars($csrf_token); ?>">

                        <!-- Honeypot anti-bot (invisible to humans, bots fill this) -->
                        <div style="position:absolute;left:-9999px;top:-9999px;opacity:0;height:0;overflow:hidden;" aria-hidden="true">
                            <label for="contact-hp">Não preencha este campo</label>
                            <input type="text" name="_hp_field" id="contact-hp" tabindex="-1" autocomplete="new-password" value="">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" data-i18n="form_name">Nome Completo</label>
                                <input type="text" id="name" required maxlength="100">
                            </div>
                            <div class="form-group">
                                <label for="phone" data-i18n="form_phone">Telemóvel</label>
                                <input type="tel" id="phone" required maxlength="30" pattern="[\d\s\+\-\(\)\.]{6,30}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" data-i18n="form_email">Email</label>
                            <input type="email" id="email" required maxlength="254">
                        </div>

                        <div class="form-group">
                            <label for="furniture-type" data-i18n="form_furniture_type">Qual móvel pretende
                                fazer?</label>
                            <select id="furniture-type" required
                                style="width: 100%; padding: 15px; border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 4px; font-family: var(--font-main); font-size: 1rem; background-color: var(--clr-light); color: var(--clr-dark);">
                                <option value="" disabled selected data-i18n="form_furniture_placeholder">Selecione uma
                                    opção (ex: Cozinha, Roupeiro...)</option>
                                <option value="Cozinha" data-i18n="form_opt_cozinha">Cozinha</option>
                                <option value="Roupeiro" data-i18n="form_opt_roupeiro">Roupeiro</option>
                                <option value="Closet" data-i18n="form_opt_closet">Closet</option>
                                <option value="Móvel de Sala" data-i18n="form_opt_sala">Móvel de Sala</option>
                                <option value="Móvel de Casa de Banho" data-i18n="form_opt_banho">Móvel de Casa de Banho
                                </option>
                                <option value="Outro" data-i18n="form_opt_outro">Outro</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="project-status" data-i18n="form_project_status">Já tem projeto?</label>
                                <select id="project-status" required
                                    style="width: 100%; padding: 15px; border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 4px; font-family: var(--font-main); font-size: 1rem; background-color: var(--clr-light); color: var(--clr-dark);">
                                    <option value="" disabled selected data-i18n="form_project_placeholder">Selecione
                                        uma opção</option>
                                    <option value="Sim, tenho projeto/medidas" data-i18n="form_opt_tem_projeto">Sim,
                                        tenho projeto/medidas</option>
                                    <option value="Não, preciso de projeto" data-i18n="form_opt_precisa_projeto">Não,
                                        preciso de projeto</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location" data-i18n="form_location">Local de instalação</label>
                                <input type="text" id="location" placeholder="Ex: Cascavel, Toledo, Foz do Iguaçu..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" data-i18n="form_message">Mensagem / Detalhes adicionais</label>
                            <textarea id="message" rows="4"></textarea>
                        </div>

                        <div class="form-actions" style="display: flex; gap: 15px; flex-wrap: wrap;">
                            <button type="submit" class="btn btn-primary" style="flex: 1; min-width: 200px;"
                                data-i18n="btn_submit">Solicitar Contacto</button>
                            <button type="button" id="btn-whatsapp-form" class="btn btn-outline"
                                style="flex: 1; min-width: 200px; border-color: var(--clr-dark); color: var(--clr-dark); background-color: transparent;"
                                onmouseover="this.style.backgroundColor='var(--clr-dark)'; this.style.color='var(--clr-white)';"
                                onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--clr-dark)';">
                                <svg class="fa-icon fa-whatsapp" style="margin-right: 8px;" aria-hidden="true"><use href="#fa-whatsapp"></use></svg> <span
                                    data-i18n="btn_whatsapp_send">Enviar Resumo</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>



        <!-- FAQ Section -->
        <section id="faq" class="section faq bg-light">
            <div class="container">
                <div class="section-header text-center animate-on-scroll">
                    <span class="subtitle" data-i18n="faq_subtitle">Dúvidas Comuns</span>
                    <h2><span data-i18n="faq_title_text">Perguntas</span> <em class="highlight"
                            data-i18n="faq_title_em">Frequentes</em></h2>
                </div>

                <div class="faq-tabs animate-on-scroll delay-1">
                    <button class="faq-tab active" data-category="projeto" data-i18n="faq_cat_1">Projeto e
                        Processo</button>
                    <button class="faq-tab" data-category="orcamento" data-i18n="faq_cat_2">Orçamento e
                        Investimento</button>
                    <button class="faq-tab" data-category="materiais" data-i18n="faq_cat_3">Materiais e
                        Acabamentos</button>
                    <button class="faq-tab" data-category="instalacao" data-i18n="faq_cat_4">Instalação e
                        Montagem</button>
                    <button class="faq-tab" data-category="garantia" data-i18n="faq_cat_5">Garantia e Suporte</button>
                </div>

                <div class="faq-container animate-on-scroll delay-1">
                    <!-- Categoria: Projeto e Processo -->
                    <div class="faq-category active" data-category="projeto">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_1_q">Como funciona a consulta para móveis planejados em Cascavel-PR?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_1_a">Agendamos uma visita técnica gratuita (Cascavel, Toledo, Foz do Iguaçu e região Oeste do Paraná). Durante esta consulta, nosso designer de interiores avaliará as medidas técnicas, compreenderá seu estilo pessoal, orçamento disponível e a visão exata que tem para os seus móveis planejados.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_2_q">Fazem projetos 3D para cozinhas e roupeiros premium antes da
                                    produÃ§Ã£o?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_2_a">Sim. Antes de iniciarmos qualquer fabricação na nossa marcenaria em Cascavel, apresentamos o projeto completo de marcenaria num detalhado modelo 3D realista. Essa visualização tridimensional permite ver exatamente como os seus móveis ficarão no espaço antes de qualquer aprovação ou produção.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_3_q">Qual Ã© o prazo de entrega para mÃ³veis por medida de alto
                                    padrÃ£o?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_3_a">A excelÃªncia exige dedicaÃ§Ã£o. O prazo de entrega do nosso
                                    mobiliÃ¡rio sob medida varia de acordo com a escala do projeto. Em mÃ©dia, projetos
                                    menores ou pontuais (como um roupeiro Ãºnico ou estante de sala) requerem 3 a 5
                                    semanas de produção. Projetos integrais de interiores e instalações completas
                                    de cozinhas premium levam cerca de 6 a 8 semanas, garantindo assim que o nível de
                                    rigor nos acabamentos e lacagens de alto padrão atinge a nossa exigência máxima.
                                </p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_4_q">Como garantem que os mÃ³veis planejados se ajustam
                                    perfeitamente ao meu espaÃ§o?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_4_a">O segredo está no levantamento técnico rigoroso. Nossa equipa de instalação desloca-se a qualquer ponto de Cascavel e região para tirar medições milimétricas, avaliar o esquadro das paredes, os pontos de luz e a canalização. Este rigor construtivo inicial permite desenhar cada peça do móvel com precisão absoluta.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_5_q">Posso alterar os detalhes do projeto apÃ³s visualizar o modelo
                                    3D?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_5_a">Com certeza! O modelo 3D Ã© desenhado precisamente para eliminar
                                    imprevistos. ApÃ³s a primeira apresentaÃ§Ã£o do seu projeto de design de alto
                                    padrÃ£o, pode solicitar revisÃµes em relaÃ§Ã£o a puxadores, acabamentos das
                                    madeiras, distribuiÃ§Ã£o das gavetas ou integraÃ§Ã£o com eletrodomÃ©sticos. Estamos
                                    comprometidos em entregar uma soluÃ§Ã£o 100% Ã  medida e finalizada ao pormenor
                                    apenas quando validar por completo o que imaginou para o seu espaÃ§o.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Categoria: OrÃ§amento e Investimento -->
                    <div class="faq-category" data-category="orcamento">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_6_q">Como é elaborado o orçamento para móveis sob medida?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_6_a">Os nossos orÃ§amentos sÃ£o justos, detalhados e totalmente
                                    transparentes. ApÃ³s aprovarmos a direÃ§Ã£o de design 3D da sua marcenaria planeada,
                                    enviamos-lhe uma proposta onde cada investimento estÃ¡ justificado: desde o valor
                                    dos acabamentos premium e iluminaÃ§Ã£o LED oculta atÃ© ao modelo de ferragem
                                    selecionado. Desta forma, sabe perfeitamente o valor exato, sem custos escondidos de
                                    Ãºltima hora.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_7_q">Atendem Toledo, Foz do Iguaçu e outras cidades da região?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_7_a">Sim. Nossa marcenaria está em Cascavel-PR, o que nos permite atender com agilidade toda a região Oeste do Paraná: Toledo, Foz do Iguaçu, Marechal Cândido Rondon, Palotina, Corbélia e cidades vizinhas.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_8_q">Qual Ã© o investimento mÃ­nimo para um projeto de mobiliÃ¡rio
                                    de luxo?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_8_a">NÃ£o estipulamos um teto mÃ­nimo. O nosso foco Ã© a excelÃªncia
                                    do material entregue e nÃ£o o volume forÃ§ado. Atendemos com a mesma dedicaÃ§Ã£o
                                    clientes focados num Ãºnico mÃ³vel de TV minimalista com lareira central ou a
                                    transformaÃ§Ã£o do closet completo. O seu orÃ§amento ditarÃ¡ as opÃ§Ãµes estÃ©ticas
                                    propostas (que vÃ£o de painÃ©is de MDF e MDF hidrÃ³fugo aos exÃ³ticos painÃ©is
                                    ripados e tampos em pedra mÃ¡rmore).</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_9_q">Os orÃ§amentos incluem custos de transporte e montagem na
                                    Ã¡rea metropolitana?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_9_a">Sem dúvida. A proposta final de valor apresentada ao cliente reflete sempre o produto "Chave na Mão". Quando contrata sua cozinha ou móvel planejado com a Frota Móveis, os custos operacionais (transporte e dias de montagem da nossa equipa instaladora) já se encontram totalmente orçamentados, eliminando surpresas financeiras.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_10_q">Garantem transparÃªncia absoluta nos valores propostos no
                                    final?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_10_a">A transparência é o nosso valor inegociável. A Frota Móveis orgulha-se de não apresentar propostas com "letras miúdas". Após a fase de medições e o fechamento dos cadernos de encargos técnicos, o valor orçamentado será aquele estritamente faturado. Caso exista alguma alteração motivada por mudança de ideia sua, será informada e reorçamentada antes de qualquer implementação.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Categoria: Materiais e Acabamentos -->
                    <div class="faq-category" data-category="materiais">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_11_q">Que materiais de excelÃªncia utilizam no vosso mobiliÃ¡rio de
                                    alto padrÃ£o?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_11_a">Como especialistas no segmento premium, fugimos dos aglomerados comuns. A base das nossas cozinhas e guarda-roupas é constituída por MDF hidrófugo (totalmente resistente à umidade) e MDF e MDF hidrófugo das renomadas marcas Arauco, Duratex, Guararapes e Sudati, garantindo frentes imaculadas com texturas naturais realistas e imunes a lascas e descoloração.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_12_q">As vossas cozinhas e armÃ¡rios incluem ferragens de fecho
                                    suave (soft-close)?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_12_a">O "soft-close" nÃ£o Ã© um extra para nÃ³s, Ã© um standard
                                    mÃ­nimo inegociÃ¡vel. Para assegurar um som grave premium e resistÃªncia ao longo de
                                    milhÃµes de aberturas, instalamos unicamente sistemas magnÃ©ticos de topo, fechos
                                    suaves com puxadores embutidos tipo gola, corrediÃ§as deslizantes ocultas totais e
                                    dobradiÃ§as sÃ³lidas das referÃªncias absolutas do mercado mundial: BLUM, HÃ¤fele e
                                    Emuca.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_13_q">Fazem lacagem premium e portas em vidro para projetos de
                                    interiores de luxo?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_13_a">A lacagem profissional Ã© uma das nossas valÃªncias mais
                                    procuradas. Transformamos simples painÃ©is em superfÃ­cies foscas ou de ultra-brilho
                                    refletivo estufado (Ã  prova de riscos ligeiros) ideais para cozinhas abertas
                                    sofisticadas. Conjugamos isso frequentemente com perfis de alumÃ­nio fino e montras
                                    de vidro reflecta bronze ou fumado enquadrado com leds, para closets impressionantes
                                    e elegantes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_14_q">Garantem a resistÃªncia Ã  humidade em mÃ³veis de casa de
                                    banho e cozinhas?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_14_a">Sabemos que mobiliÃ¡rio de alto padrÃ£o nÃ£o deve apenas ser
                                    belo visualmente, tem que ser implacÃ¡vel nas condiÃ§Ãµes difÃ­ceis. Para as zonas
                                    de instabilidade tÃ©rmica ou Ã¡guas correntes (cozinhas chef e casas de banho
                                    suite), usamos apenas bases em aglomerado marÃ­timo naval ou frentes em MDF
                                    rigorosamente seladas contra infiltraÃ§Ãµes. Os tampos e fundos por baixo dos
                                    lava-loiÃ§as contam com chapas respirÃ¡veis em alumÃ­nio de resguardo.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_15_q">Posso escolher tampos em mÃ¡rmore ou pedra natural para a
                                    minha cozinha?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_15_a">Trabalhamos em conjunto com parceiros marmoristas selecionados da região para incorporar os mais variados minerais — quartzos da Silestone/Dekton, granitos escovados antideslizantes ou mármores naturais. Nossa equipa assegura que as ilhas da cozinha têm os reforços estruturais certos previstos na nossa marcenaria em Cascavel para acomodar corretamente as pedras de alto peso.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Categoria: InstalaÃ§Ã£o e Montagem -->
                    <div class="faq-category" data-category="instalacao">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_16_q">Como é feito o levantamento técnico do espaço?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_16_a">A fase técnica é sagrada. Viajamos ao seu domicílio com ferramentas especializadas de nivelação e teleradiometria laser. Registamos com detalhe se o ângulo das estruturas está correto e sinalizamos previamente as aberturas cegas para ligações de tomadas e disjuntores que ficarão tapadas pelo móvel.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_17_q">A montagem dos mÃ³veis sob medida Ã© realizada por
                                    profissionais experientes?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_17_a">Ao contrário do mercado "low-cost" não delegamos a equipes montadoras informais. Nossos funcionários são colaboradores da própria Frota Móveis. Conhecem cada peça da instalação (já operaram com partes delas na nossa marcenaria em Cascavel), são cuidadosos no ambiente domiciliar e dominam o ajuste milimétrico para que nenhuma folga fique visível.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_18_q">A instalação dos móveis sob medida causa muito entulho?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_18_a">O volume de serragens e perfurações em bruto é reduzido a uns ínfimos 5% no seu imóvel. Isso porque a Frota Móveis trabalha com 95% do móvel pré-fabricado: tudo cortado, lacado e orlado na nossa marcenaria em Cascavel. Na fase final, é feita apenas a colagem, parafusamento pontual e a calibração de prumos.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_19_q">Como protegem o restante ambiente da casa durante a montagem
                                    das peÃ§as?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_19_a">Os técnicos de instalação da Frota Móveis operam com nível elevado de cuidado. O seu valioso piso ou madeiras são previamente cobertos por lonas limpas e emborrachadas. O uso de EPIs é obrigatório e toda a movimentação dos módulos pelas áreas da casa é executada ressalvando molduras e esquadrias sensíveis.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_20_q">Precisam que o espaÃ§o esteja vazio e limpo antes de iniciar
                                    a montagem?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_20_a">Sim, idealmente a zona de montagem do armário ou cozinha requer esvaziamento total no perímetro exato do móvel. Porém, sabendo que instalações em locais habitados são frequentes, a Frota Móveis garante o rigor final aspirando o pouco pó do interior e dos canais, deixando o móvel imediatamente pronto para organização.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Categoria: Garantia e Suporte -->
                    <div class="faq-category" data-category="garantia">
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_21_q">Que tipo de garantia Ã© oferecida nos vossos mÃ³veis premium
                                    e cozinhas?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_21_a">A durabilidade dos nossos componentes permite que nossos clientes fiquem tranquilos. Oferecemos 3 anos de garantia em todos os projetos de marcenaria e armários sob medida. Utilizamos matérias-primas de excelência que previnem defeitos estruturais e garantem longa durabilidade.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_22_q">Têm serviço de assistência técnica pós-venda em Cascavel e na região?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_22_a">Nosso orgulho sobre o que vendemos manifesta-se na capacidade de não deixar o cliente sem apoio. Ao adquirir um móvel planejado da Frota Móveis, você conta com atendimento técnico real, com visitas domiciliares para substituições parciais eficientes em Cascavel e toda a região Oeste do Paraná.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_23_q">O que acontece se uma dobradiÃ§a ou corrediÃ§a necessitar de
                                    afinaÃ§Ã£o posterior?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_23_a">A madeira ou chapa crua sofre torções milimétricas lentas naturais das dilatações diárias no primeiro ano. Se uma das suas portas ou gavetas BLUM apresentar fechamento irregular após alguns meses, basta nos informar; a calibração dessas engrenagens europeias recuperará a eficácia em minutos com o suporte técnico ativo da equipa Frota Móveis.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_24_q">Quanto tempo dura um projeto de mobiliÃ¡rio planeado de
                                    qualidade e alto padrÃ£o?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_24_a">Um roupeiro modular de cadeia varejista com ferragens soltas sobre orlas mal seladas degrada visualmente em torno de 5 anos. Pela adoção absoluta de painéis sólidos e chapas ultra-compressas densas, um projeto customizado e lacado cuidadosamente pela Frota Móveis perdura robustamente por várias décadas familiares sem fadiga contínua.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                <span data-i18n="faq_25_q">Como devo fazer a manutenÃ§Ã£o e limpeza das superfÃ­cies
                                    lacadas e painÃ©is?</span>
                                <svg class="fa-icon fa-plus"  aria-hidden="true"><use href="#fa-plus"></use></svg>
                            </button>
                            <div class="faq-answer">
                                <p data-i18n="faq_25_a">As texturas do luxo primam essencialmente pela facilitaÃ§Ã£o
                                    rotineira da vida aos seus donos reais. SuperfÃ­cies de MDF lacado brancas ou
                                    antracite ou os paineis tipo folheado amadeirados texturizados e as ilhas que
                                    aplicamos estÃ£o projetados com lacagem repelente ultra polida. Qualquer
                                    escorrÃªncia e sujidade quotidiana remove-se amplamente abdicando de esponjas de
                                    agressÃ£o, sabÃ£o amoniacal lixivioso ou quÃ­micas pesadas abrasivas, precisando
                                    imune de apenas sabÃ£o neutro dissoluto num espanador suave e humedecido Ã 
                                    erradicaÃ§Ã£o de impressÃµes digitais.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col about">
                    <a href="#" class="logo" aria-label="Ir para o topo da página inicial">
                <img src="logofrota.svg" alt="Frota Móveis Planejados" style="height:60px;width:auto;display:block;">
            </a>
                    <p data-i18n="footer_about">Especialistas em móveis sob medida, aliando design, funcionalidade
                        e conforto em cada projeto.</p>

                    <div class="footer-hours" style="margin: 1.5rem 0; font-size: 0.95rem; color: #f0f0f0;">
                        <p style="margin-bottom: 5px;"><svg class="fa-icon fa-clock" style="color: var(--clr-primary); margin-right: 8px;" aria-hidden="true"><use href="#fa-clock"></use></svg><strong
                                data-i18n="footer_hours_title">Horário de Funcionamento</strong></p>
                        <p style="margin: 0; padding-left: 22px;" data-i18n="footer_hours_days">Segunda a Sexta</p>
                        <p style="margin: 0; padding-left: 22px; color: var(--clr-primary); font-weight: 500;"
                            data-i18n="footer_hours_time">08:00 - 12:00 | 13:00 - 18:00</p>
                    </div>

                    <div class="social-links">
                        <a href="https://www.instagram.com/frotamoveisplanejados" target="_blank" rel="noopener noreferrer" aria-label="Visite nosso Instagram"><svg class="fa-icon fa-instagram"  aria-hidden="true"><use href="#fa-instagram"></use></svg></a>
                        <a href="https://wa.me/554599180019" target="_blank" rel="noopener noreferrer" aria-label="Fale conosco pelo WhatsApp"><svg class="fa-icon fa-whatsapp"  aria-hidden="true"><use href="#fa-whatsapp"></use></svg></a>
                        <a href="https://share.google/Xt3JSGJlvrb16BBiW"
                            target="_blank" rel="noopener noreferrer" aria-label="Veja nossas avaliações no Google"><svg class="fa-icon fa-google"  aria-hidden="true"><use href="#fa-google"></use></svg></a>
                    </div>
                </div>

                <div class="footer-col links">
                    <h3 data-i18n="footer_links_title">Links Rápidos</h3>
                    <ul>
                        <li><a href="#hero" data-i18n="nav_home">Página Inicial</a></li>
                        <li><a href="#about" data-i18n="nav_about">Sobre Nós</a></li>
                        <li><a href="#services" data-i18n="nav_services">Serviços</a></li>
                        <li><a href="#portfolio" data-i18n="nav_portfolio">Transformações</a></li>
                        <li><a href="#contact" data-i18n="nav_contact">Contacto</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom" style="text-align: center;">
                <p style="margin-bottom: 5px; font-weight: 500; color: #f0f0f0;">Frota Móveis Planejados | Cascavel - PR, Brasil</p>
                <p style="margin-bottom: 8px; font-size: 0.85rem;">
                    <a href="/privacidade.php" style="color: var(--clr-primary); text-decoration: underline;" data-i18n="footer_privacy">Política de Privacidade</a>
                    <span style="color: #555; margin: 0 8px;">|</span>
                    <a href="/privacidade.php#cookies" style="color: var(--clr-primary); text-decoration: underline;">Política de Cookies</a>
                </p>
                <p style="font-size: 0.9rem; color: #e0e0e0;">&copy; 2026 moveisfrota.com.br. <span
                        data-i18n="footer_rights">Todos os direitos reservados.</span></p>
                <p style="font-size: 0.78rem; color: #666; margin-top: 6px;">Desenvolvido por Pablo Calmon</p>
            </div>
        </div>
    </footer>

    <!-- Chatbot -->
    <button id="chatbot-toggle" class="chatbot-toggle" aria-label="Abrir chat">
        <svg class="chat-icon-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor"><path d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 45.3-46.7 45.3-108.7c0-2.4-.2-4.8-.5-7.2C18.2 309.4 0 276.5 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"/></svg>
        <svg class="chat-icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="currentColor"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
    </button>

    <div id="chatbot-window" class="chatbot-window">
        <div class="chatbot-header">
            <div class="chatbot-header-info">
                <div class="chatbot-avatar"><svg class="fa-icon fa-headset"  aria-hidden="true"><use href="#fa-headset"></use></svg></div>
                <div>
                    <strong>Frota Móveis</strong>
                    <span class="chatbot-status">Online</span>
                </div>
            </div>
            <button id="chatbot-close" class="chatbot-close" aria-label="Fechar chat">
                <svg class="fa-icon fa-xmark"  aria-hidden="true"><use href="#fa-xmark"></use></svg>
            </button>
        </div>
        <div id="chatbot-messages" class="chatbot-messages"></div>
        <div id="chatbot-input" class="chatbot-input" style="display:none;">
            <input type="text" id="chatbot-input-field" class="chatbot-input-field" placeholder="Escreva aqui..."
                autocomplete="off">
            <button id="chatbot-send" class="chatbot-send" aria-label="Enviar">
                <svg class="fa-icon fa-paper-plane"  aria-hidden="true"><use href="#fa-paper-plane"></use></svg>
            </button>
        </div>
    </div>

    <!-- Exit Intent Popup -->
    <div id="exit-popup" class="exit-popup">
        <div class="exit-popup-overlay"></div>
        <div class="exit-popup-content">
            <button id="exit-popup-close" class="exit-popup-close" aria-label="Fechar Popup"><svg class="fa-icon fa-xmark"  aria-hidden="true"><use href="#fa-xmark"></use></svg></button>
            <div class="exit-popup-body">
                <h3 data-i18n="exit_title">Ainda tem dúvidas?<br>Nós ajudamos!</h3>
                <p data-i18n="exit_desc">Antes de sair, fale com um dos nossos especialistas. Receba um atendimento
                    personalizado para encontrar exatamente o que procura, sem compromisso.</p>
                <a href="https://wa.me/554599180019?text=Olá%2C%20gostaria%20de%20falar%20com%20um%20especialista%20sobre%20meu%20projeto%20de%20móveis%20planejados"
                    target="_blank" rel="noopener noreferrer" class="btn btn-primary" id="exit-popup-btn"><svg class="fa-icon fa-whatsapp" style="margin-right: 8px;" aria-hidden="true"><use href="#fa-whatsapp"></use></svg> <span data-i18n="exit_btn">FALAR
                        COM UM ESPECIALISTA
                        AGORA</span></a>
            </div>
        </div>
    </div>

    <!-- Banner de Cookies (RGPD) -->
    <div id="cookie-banner" class="cookie-banner" role="dialog" aria-label="Aviso de cookies" style="display:none;">
        <div class="cookie-banner-content">
            <div class="cookie-banner-text">
                <strong>Utilizamos cookies</strong>
                <p>Usamos o Google Analytics para entender como os visitantes utilizam o nosso site. Os dados são anónimos e apenas usados para melhorar a experiência. Pode aceitar ou rejeitar cookies não essenciais.</p>
            </div>
            <div class="cookie-banner-actions">
                <a href="/privacidade.php" class="cookie-link">Política de Privacidade</a>
                <button id="cookie-reject" class="cookie-btn cookie-btn-reject">Rejeitar</button>
                <button id="cookie-accept" class="cookie-btn cookie-btn-accept">Aceitar Cookies</button>
            </div>
        </div>
    </div>

    <script>
        (function() {
            var consent = localStorage.getItem('frota_cookie_consent');
            if (!consent) {
                document.getElementById('cookie-banner').style.display = 'flex';
            }

            document.getElementById('cookie-accept').addEventListener('click', function() {
                localStorage.setItem('frota_cookie_consent', 'accepted');
                document.getElementById('cookie-banner').style.display = 'none';
                if (window.frotaLoadGA) window.frotaLoadGA();
            });

            document.getElementById('cookie-reject').addEventListener('click', function() {
                localStorage.setItem('frota_cookie_consent', 'rejected');
                document.getElementById('cookie-banner').style.display = 'none';
            });
        })();
    </script>

    <!-- Scripts -->
    <script src="script.js?v=2.0" defer></script>
    <script src="chatbot.js" defer></script>

</body>

</html>