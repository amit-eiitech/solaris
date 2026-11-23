<?php

return [

    'switch_language' => 'Cambiar idioma',

    'navigation' => [
        'groups' => [
            'content' => 'Contenido',
            'recruitment' => 'Reclutamiento',
            'administration' => 'Administración',
            'settings' => 'Configuración',
        ],
    ],

    'resources' => [
        'categories' => [
            'navigation_label' => 'Categorías',
            'model_label' => 'Categoría',
            'plural_model_label' => 'Categorías',
            'section_title' => 'Información de la categoría',
            'section_description' => 'Taxonomías de categorización compartidas entre tipos de contenido',
        ],
        'blog_posts' => [
            'navigation_label' => 'Blog',
            'model_label' => 'Artículo de blog',
            'plural_model_label' => 'Artículos de blog',
        ],
        'events' => [
            'navigation_label' => 'Eventos',
            'model_label' => 'Evento',
            'plural_model_label' => 'Eventos',
        ],
        'faqs' => [
            'navigation_label' => 'Preguntas frecuentes',
            'model_label' => 'Pregunta frecuente',
            'plural_model_label' => 'Preguntas frecuentes',
        ],
        'job_posts' => [
            'navigation_label' => 'Ofertas de empleo',
            'model_label' => 'Oferta de empleo',
            'plural_model_label' => 'Ofertas de empleo',
        ],
        'news' => [
            'navigation_label' => 'Noticias',
            'model_label' => 'Noticia',
            'plural_model_label' => 'Noticias',
        ],
    ],

    'fields' => [
        'name' => 'Nombre',
        'name_helper' => 'Nombre público de la categoría, ej. Noticias corporativas, Eventos',
        'slug' => 'Identificador (Slug)',
        'slug_helper' => 'Identificador URL para esta categoría. Solo se permiten letras minúsculas, números y guiones.',
        'scope' => 'Ámbito',
        'scope_helper' => 'El módulo de contenido al que se aplica esta taxonomía',
        'description' => 'Descripción',
        'description_helper' => 'Descripción opcional mostrada en la página de archivo o meta descripciones',
        'title' => 'Título',
        'status' => 'Estado',
        'author_name' => 'Nombre del autor',
        'created_at' => 'Fecha de creación',
        'updated_at' => 'Última actualización',
    ],

    'scopes' => [
        'news' => 'Noticias',
        'events' => 'Eventos',
        'blog' => 'Blog',
    ],

    'tabs' => [
        'details' => 'Detalles',
        'seo' => 'SEO',
        'media' => 'Medios',
    ],

    'actions' => [
        'create' => 'Crear',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
    ],

];
