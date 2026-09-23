<?php

namespace App\Services;

class MockCatalogService
{
    public static function getCategories(): array
    {
        return [
            [
                'slug' => 'esmalte-gel',
                'name' => 'Esmaltação em Gel',
                'short_name' => 'Esmaltes em Gel',
                'description' => 'Esmaltes em gel com secagem rápida, alta cobertura e brilho espelhado duradouro.',
                'product_count' => 34,
                'featured' => true,
                'image' => '/images/products/esmalte-gel-vinho.jpg'
            ],
            [
                'slug' => 'alongamento-gel',
                'name' => 'Géis Construtores',
                'short_name' => 'Géis & Alongamento',
                'description' => 'Géis autonivelantes de alta densidade para estrutura, curvatura e ponto de tensão perfeitos.',
                'product_count' => 28,
                'featured' => true,
                'image' => '/images/products/builder-gel.jpg'
            ],
            [
                'slug' => 'equipamentos',
                'name' => 'Cabines & Equipamentos',
                'short_name' => 'Equipamentos',
                'description' => 'Aparelhos com tecnologia UV/LED profissional para secagem homogênea e rápida.',
                'product_count' => 16,
                'featured' => true,
                'image' => '/images/products/cabine-led-uv.jpg'
            ],
            [
                'slug' => 'extensao-cilios',
                'name' => 'Cílios & Sobrancelhas',
                'short_name' => 'Lash & Brow',
                'description' => 'Fios ultrafinos hipoalergênicos e pinças de titânio para volume e precisão máxima.',
                'product_count' => 22,
                'featured' => true,
                'image' => '/images/products/pinca-cilios-ouro.jpg'
            ],
            [
                'slug' => 'preparadores',
                'name' => 'Preparadores & Higiene',
                'short_name' => 'Preparadores',
                'description' => 'Desidratadores, primers de aderência e soluções higienizadoras profissionais.',
                'product_count' => 19,
                'featured' => true,
                'image' => '/images/products/prep-primer.jpg'
            ],
        ];
    }

    public static function getCategoryBySlug(string $slug): ?array
    {
        foreach (self::getCategories() as $cat) {
            if ($cat['slug'] === $slug) {
                return $cat;
            }
        }
        return null;
    }

    public static function getProducts(array $filters = []): array
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Gel Construtor Autonivelante Builder Gel 30g',
                'slug' => 'gel-construtor-autonivelante-builder-gel-30g',
                'category_slug' => 'alongamento-gel',
                'category_name' => 'Géis Construtores',
                'subcategory' => 'Géis UV/LED',
                'price' => 89.90,
                'stock' => 24,
                'sku' => 'GEL-BLD-01',
                'image' => '/images/products/builder-gel.jpg',
                'gallery' => [
                    '/images/products/builder-gel.jpg',
                    '/images/products/prep-primer.jpg',
                    '/images/products/esmalte-gel-vinho.jpg'
                ],
                'description' => 'Fórmula alemã autonivelante de alta resistência e excelente memória de curvatura C. Não esquenta excessivamente na polimerização e oferece acabamento uniforme com toque sedoso.',
                'specifications' => [
                    'Viscosidade' => 'Média-Alta',
                    'Tempo de Cabine' => '60s UV/LED',
                    'Indicação' => 'Alongamentos, capa base e ponto de tensão',
                    'Volume' => '30g',
                    'Origem' => 'Importado / Registrado ANVISA'
                ],
                'variants' => [
                    ['id' => 101, 'name' => 'Soft Rose (30g)', 'sku' => 'GEL-BLD-01-SR', 'stock' => 14, 'available' => true],
                    ['id' => 102, 'name' => 'Clear Crystal (30g)', 'sku' => 'GEL-BLD-01-CL', 'stock' => 10, 'available' => true],
                    ['id' => 103, 'name' => 'Cover Pink Nude (30g)', 'sku' => 'GEL-BLD-01-CP', 'stock' => 0, 'available' => false],
                ],
                'featured' => true,
                'is_new' => true,
            ],
            [
                'id' => 2,
                'name' => 'Esmalte em Gel Coleção Rouge Éclat 15ml',
                'slug' => 'esmalte-em-gel-colecao-rouge-eclat-15ml',
                'category_slug' => 'esmalte-gel',
                'category_name' => 'Esmaltação em Gel',
                'subcategory' => 'Esmaltes UV',
                'price' => 42.50,
                'stock' => 48,
                'sku' => 'ESM-RGE-02',
                'image' => '/images/products/esmalte-gel-vinho.jpg',
                'gallery' => [
                    '/images/products/esmalte-gel-vinho.jpg',
                    '/images/products/builder-gel.jpg'
                ],
                'description' => 'Pigmentação densa com cobertura perfeita já na primeira camada. Pincel anatômico flat de 600 cerdas para aplicação precisa sem escorrer nas cutículas.',
                'specifications' => [
                    'Acabamento' => 'Ultra Brilho Cremoso',
                    'Tempo de Cabine' => '30 a 60s LED',
                    'Volume' => '15ml',
                    'Durabilidade' => 'Até 21 dias intacto'
                ],
                'variants' => [
                    ['id' => 201, 'name' => 'Bordeaux Royale (Vinho)', 'sku' => 'ESM-RGE-02-BX', 'stock' => 28, 'available' => true],
                    ['id' => 202, 'name' => 'Velvet Plum (Ameixa)', 'sku' => 'ESM-RGE-02-VP', 'stock' => 12, 'available' => true],
                    ['id' => 203, 'name' => 'Gilded Rose (Cobre Perolado)', 'sku' => 'ESM-RGE-02-GR', 'stock' => 8, 'available' => true],
                ],
                'featured' => true,
                'is_new' => true,
            ],
            [
                'id' => 3,
                'name' => 'Cabine Profissional Sun UV/LED 48W Sensor Inteligente',
                'slug' => 'cabine-profissional-sun-uv-led-48w-sensor-inteligente',
                'category_slug' => 'equipamentos',
                'category_name' => 'Cabines & Equipamentos',
                'subcategory' => 'Cabines',
                'price' => 219.00,
                'stock' => 12,
                'sku' => 'CAB-UV-48W',
                'image' => '/images/products/cabine-led-uv.jpg',
                'gallery' => [
                    '/images/products/cabine-led-uv.jpg',
                    '/images/products/builder-gel.jpg'
                ],
                'description' => 'Com 30 pontos de LED estrategicamente posicionados sem pontos cegos. Sensor infravermelho de ativação automática e display digital com temporizadores de 10s, 30s, 60s e modo 99s Low Heat.',
                'specifications' => [
                    'Potência' => '48W',
                    'Comprimento de Onda' => '365nm + 405nm (Dual Light)',
                    'Alimentação' => 'Bivolt Automático (110V/220V)',
                    'Base Removível' => 'Sim (Facilita higienização e pedicure)'
                ],
                'variants' => [
                    ['id' => 301, 'name' => 'Branco Acetinado (Bivolt)', 'sku' => 'CAB-UV-48W-WHT', 'stock' => 9, 'available' => true],
                    ['id' => 302, 'name' => 'Rosé Gold Metallic (Bivolt)', 'sku' => 'CAB-UV-48W-RSG', 'stock' => 3, 'available' => true],
                ],
                'featured' => true,
                'is_new' => false,
            ],
            [
                'id' => 4,
                'name' => 'Kit Pinças de Precisão Titânio Dourado para Volume Russo',
                'slug' => 'kit-pincas-precisao-titanio-dourado-volume-russo',
                'category_slug' => 'extensao-cilios',
                'category_name' => 'Cílios & Sobrancelhas',
                'subcategory' => 'Pinças',
                'price' => 135.00,
                'stock' => 3,
                'sku' => 'PIN-RUS-GLD',
                'image' => '/images/products/pinca-cilios-ouro.jpg',
                'gallery' => [
                    '/images/products/pinca-cilios-ouro.jpg',
                    '/images/products/prep-primer.jpg'
                ],
                'description' => 'Calibradas manualmente uma a uma para garantir fechamento suave e encaixe hermético da ponta. Permite montar fans volumosos do 2D ao 10D com retenção absoluta sem escorregar fios.',
                'specifications' => [
                    'Material' => 'Aço Cirúrgico com Revestimento de Titânio Dourado',
                    'Peso' => 'Ultraleve (16g cada)',
                    'Ponta' => 'Micro-ranhurada para fixação'
                ],
                'variants' => [
                    ['id' => 401, 'name' => 'Curva 45° Volume Russo', 'sku' => 'PIN-RUS-45', 'stock' => 2, 'available' => true],
                    ['id' => 402, 'name' => 'Reta Clássica para Isolamento', 'sku' => 'PIN-RUS-RT', 'stock' => 1, 'available' => true],
                    ['id' => 403, 'name' => 'Bico de Pato Mega Volume', 'sku' => 'PIN-RUS-BP', 'stock' => 0, 'available' => false],
                ],
                'featured' => true,
                'is_new' => false,
            ],
            [
                'id' => 5,
                'name' => 'Primer Ácido & Desidratador Prep Dehydrator 15ml',
                'slug' => 'primer-acido-desidratador-prep-dehydrator-15ml',
                'category_slug' => 'preparadores',
                'category_name' => 'Preparadores & Higiene',
                'subcategory' => 'Primers',
                'price' => 38.00,
                'stock' => 60,
                'sku' => 'PREP-DHY-05',
                'image' => '/images/products/prep-primer.jpg',
                'gallery' => [
                    '/images/products/prep-primer.jpg',
                    '/images/products/builder-gel.jpg'
                ],
                'description' => 'Passo essencial para preparar a lâmina ungueal. Desidrata profundamente e equilibra o pH natural da unha, eliminando oleosidade residual e garantindo adesão prolongada sem descolamentos.',
                'specifications' => [
                    'Volume' => '15ml',
                    'Aplicação' => 'Pincel / Secagem natural ao ar em 5 segundos',
                    'Ação' => 'Desengordurante e desidratante'
                ],
                'variants' => [
                    ['id' => 501, 'name' => 'Frasco Padrão 15ml', 'sku' => 'PREP-DHY-15', 'stock' => 45, 'available' => true],
                    ['id' => 502, 'name' => 'Frasco Econômico 30ml', 'sku' => 'PREP-DHY-30', 'stock' => 15, 'available' => true],
                ],
                'featured' => true,
                'is_new' => false,
            ],
            [
                'id' => 6,
                'name' => 'Top Coat Sem Goma High Gloss Diamond 15ml',
                'slug' => 'top-coat-sem-goma-high-gloss-diamond-15ml',
                'category_slug' => 'esmalte-gel',
                'category_name' => 'Esmaltação em Gel',
                'subcategory' => 'Finalizadores',
                'price' => 46.90,
                'stock' => 0,
                'sku' => 'TOP-DMD-06',
                'image' => '/images/products/builder-gel.jpg',
                'gallery' => [
                    '/images/products/builder-gel.jpg'
                ],
                'description' => 'Finalizador com fórmula anti-amarelamento e tecnologia anti-riscos. Dispensa o uso de cleanser pós-cabine e proporciona reflexo vítreo impecável por semanas.',
                'specifications' => [
                    'Goma' => 'Não requer limpeza (No Wipe)',
                    'Brilho' => 'Espelhado Alta Densidade',
                    'Tempo de Cabine' => '60s LED'
                ],
                'variants' => [
                    ['id' => 601, 'name' => 'Brilho Diamond (Sem Goma)', 'sku' => 'TOP-DMD-BW', 'stock' => 0, 'available' => false],
                    ['id' => 602, 'name' => 'Efeito Matte Aveludado', 'sku' => 'TOP-DMD-MT', 'stock' => 0, 'available' => false],
                ],
                'featured' => false,
                'is_new' => false,
            ],
            [
                'id' => 7,
                'name' => 'Base em Gel Niveladora Rubber Base 15ml',
                'slug' => 'base-em-gel-niveladora-rubber-base-15ml',
                'category_slug' => 'esmalte-gel',
                'category_name' => 'Esmaltação em Gel',
                'subcategory' => 'Bases',
                'price' => 44.00,
                'stock' => 5,
                'sku' => 'BAS-RUB-07',
                'image' => '/images/products/esmalte-gel-vinho.jpg',
                'gallery' => [
                    '/images/products/esmalte-gel-vinho.jpg',
                    '/images/products/builder-gel.jpg'
                ],
                'description' => 'Base elástica e flexível com densidade de borracha natural. Preenche ondulações da unha natural e cria uma camada amortecedora que previne quebras e trincas.',
                'specifications' => [
                    'Textura' => 'Emborrachada elástica',
                    'Camada' => 'Adesiva niveladora',
                    'Cura' => '60s UV/LED'
                ],
                'variants' => [
                    ['id' => 701, 'name' => 'Clear Transparente (15ml)', 'sku' => 'BAS-RUB-CL', 'stock' => 3, 'available' => true],
                    ['id' => 702, 'name' => 'Nude Camouflage (15ml)', 'sku' => 'BAS-RUB-NC', 'stock' => 2, 'available' => true],
                ],
                'featured' => false,
                'is_new' => true,
            ],
            [
                'id' => 8,
                'name' => 'Fios Elipse Cashmere Curvatura D 0.07mm',
                'slug' => 'fios-elipse-cashmere-curvatura-d-007mm',
                'category_slug' => 'extensao-cilios',
                'category_name' => 'Cílios & Sobrancelhas',
                'subcategory' => 'Fios',
                'price' => 58.00,
                'stock' => 18,
                'sku' => 'FIO-CSH-08',
                'image' => '/images/products/pinca-cilios-ouro.jpg',
                'gallery' => [
                    '/images/products/pinca-cilios-ouro.jpg'
                ],
                'description' => 'Fios ocos com base elíptica que pesam menos da metade de um fio convencional, permitindo preenchimento dramático sem sobrecarregar o fio natural da cliente.',
                'specifications' => [
                    'Curvatura' => 'D (Efeito Boneca Intenso)',
                    'Espessura' => '0.07mm',
                    'Linhas' => '16 fileiras por bandeja',
                    'Fibra' => 'PBT sintético nobre'
                ],
                'variants' => [
                    ['id' => 801, 'name' => 'Bandeja Mix (8mm a 15mm)', 'sku' => 'FIO-CSH-MIX', 'stock' => 10, 'available' => true],
                    ['id' => 802, 'name' => 'Tamanho 10mm Individual', 'sku' => 'FIO-CSH-10', 'stock' => 5, 'available' => true],
                    ['id' => 803, 'name' => 'Tamanho 12mm Individual', 'sku' => 'FIO-CSH-12', 'stock' => 3, 'available' => true],
                ],
                'featured' => false,
                'is_new' => true,
            ],
        ];

        // Filtro por Categoria
        if (!empty($filters['category'])) {
            $products = array_filter($products, fn($p) => $p['category_slug'] === $filters['category']);
        }

        // Filtro por Disponibilidade
        if (!empty($filters['availability'])) {
            if ($filters['availability'] === 'in_stock') {
                $products = array_filter($products, fn($p) => $p['stock'] > 0);
            } elseif ($filters['availability'] === 'out_of_stock') {
                $products = array_filter($products, fn($p) => $p['stock'] === 0);
            }
        }

        // Filtro por Busca
        if (!empty($filters['query'])) {
            $q = mb_strtolower(trim($filters['query']));
            $products = array_filter($products, function ($p) use ($q) {
                return str_contains(mb_strtolower($p['name']), $q)
                    || str_contains(mb_strtolower($p['sku']), $q)
                    || str_contains(mb_strtolower($p['category_name']), $q);
            });
        }

        // Filtro por Faixa de Preço
        if (isset($filters['min_price']) && is_numeric($filters['min_price'])) {
            $products = array_filter($products, fn($p) => $p['price'] >= (float)$filters['min_price']);
        }
        if (isset($filters['max_price']) && is_numeric($filters['max_price'])) {
            $products = array_filter($products, fn($p) => $p['price'] <= (float)$filters['max_price']);
        }

        // Ordenação
        $sort = $filters['sort'] ?? 'relevance';
        if ($sort === 'price_asc') {
            usort($products, fn($a, $b) => $a['price'] <=> $b['price']);
        } elseif ($sort === 'price_desc') {
            usort($products, fn($a, $b) => $b['price'] <=> $a['price']);
        } elseif ($sort === 'newest') {
            usort($products, fn($a, $b) => ($b['is_new'] ? 1 : 0) <=> ($a['is_new'] ? 1 : 0));
        }

        return array_values($products);
    }

    public static function getProductById(int $id): ?array
    {
        $all = self::getProducts();
        foreach ($all as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }
        return null;
    }

    public static function getFeaturedProducts(int $limit = 4): array
    {
        $products = array_filter(self::getProducts(), fn($p) => $p['featured']);
        return array_slice(array_values($products), 0, $limit);
    }

    public static function getNewArrivals(int $limit = 4): array
    {
        $products = array_filter(self::getProducts(), fn($p) => $p['is_new'] && $p['stock'] > 0);
        return array_slice(array_values($products), 0, $limit);
    }

    public static function getRelatedProducts(int $currentId, string $categorySlug, int $limit = 4): array
    {
        $products = array_filter(self::getProducts(), fn($p) => $p['id'] !== $currentId && $p['category_slug'] === $categorySlug);
        if (count($products) < $limit) {
            $other = array_filter(self::getProducts(), fn($p) => $p['id'] !== $currentId && $p['category_slug'] !== $categorySlug);
            $products = array_merge($products, $other);
        }
        return array_slice(array_values($products), 0, $limit);
    }

    public static function getMockCart(): array
    {
        return [
            'items' => [
                [
                    'id' => 1,
                    'product_id' => 1,
                    'name' => 'Gel Construtor Autonivelante Builder Gel 30g',
                    'variant' => 'Soft Rose (30g)',
                    'sku' => 'GEL-BLD-01-SR',
                    'price' => 89.90,
                    'quantity' => 2,
                    'subtotal' => 179.80,
                    'image' => '/images/products/builder-gel.jpg',
                    'slug' => 'gel-construtor-autonivelante-builder-gel-30g'
                ],
                [
                    'id' => 2,
                    'product_id' => 2,
                    'name' => 'Esmalte em Gel Coleção Rouge Éclat 15ml',
                    'variant' => 'Bordeaux Royale (Vinho)',
                    'sku' => 'ESM-RGE-02-BX',
                    'price' => 42.50,
                    'quantity' => 1,
                    'subtotal' => 42.50,
                    'image' => '/images/products/esmalte-gel-vinho.jpg',
                    'slug' => 'esmalte-em-gel-colecao-rouge-eclat-15ml'
                ],
                [
                    'id' => 3,
                    'product_id' => 5,
                    'name' => 'Primer Ácido & Desidratador Prep Dehydrator 15ml',
                    'variant' => 'Frasco Padrão 15ml',
                    'sku' => 'PREP-DHY-15',
                    'price' => 38.00,
                    'quantity' => 1,
                    'subtotal' => 38.00,
                    'image' => '/images/products/prep-primer.jpg',
                    'slug' => 'primer-acido-desidratador-prep-dehydrator-15ml'
                ]
            ],
            'subtotal' => 260.30,
            'shipping' => 'Calcule no checkout',
            'total' => 260.30,
            'items_count' => 4
        ];
    }

    public static function getMockOrder(): array
    {
        return [
            'code' => 'KN-98421',
            'created_at' => '22/09/2026 às 20:30',
            'customer' => [
                'name' => 'Mariana Silveira',
                'email' => 'mariana.silveira@exemplo.com.br',
                'phone' => '(11) 98765-4321',
                'address' => 'Alameda Santos, 1200 - Apto 82',
                'neighborhood' => 'Cerqueira César',
                'city' => 'São Paulo',
                'state' => 'SP',
                'zip' => '01418-100'
            ],
            'items' => [
                [
                    'name' => 'Gel Construtor Autonivelante Builder Gel 30g',
                    'variant' => 'Soft Rose (30g)',
                    'price' => 89.90,
                    'quantity' => 2,
                    'subtotal' => 179.80,
                    'image' => '/images/products/builder-gel.jpg'
                ],
                [
                    'name' => 'Esmalte em Gel Coleção Rouge Éclat 15ml',
                    'variant' => 'Bordeaux Royale (Vinho)',
                    'price' => 42.50,
                    'quantity' => 1,
                    'subtotal' => 42.50,
                    'image' => '/images/products/esmalte-gel-vinho.jpg'
                ]
            ],
            'subtotal' => 222.30,
            'shipping' => 18.50,
            'total' => 240.80,
            'payment_method' => 'PIX (Confirmação Imediata)',
            'status' => 'pago', // aguardando_pagamento, pago, preparando, enviado
            'steps' => [
                ['label' => 'Pedido Recebido', 'completed' => true, 'date' => '22/09 20:30'],
                ['label' => 'Pagamento Confirmado', 'completed' => true, 'date' => '22/09 20:32'],
                ['label' => 'Separando no Estoque', 'completed' => true, 'date' => '22/09 20:45'],
                ['label' => 'Pronto para Envio', 'completed' => false, 'date' => 'Previsão amanhã'],
            ]
        ];
    }
}
