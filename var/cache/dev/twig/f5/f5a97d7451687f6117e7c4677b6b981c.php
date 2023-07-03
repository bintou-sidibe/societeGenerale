<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_8ae256ae8378f18c299490d05a54ebea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "

";
        // line 23
        echo "
<style>
.questionnaire-body {
    max-width: 600px;
}
</style>

<h1 class=\"text-center mb-4\">Trouver ton association</h1>

<div class=\"container\">
Votre volonté d'investissement dans des associations est admirable.
En vous impliquant, vous faites une différence concrète dans des domaines qui vous
tiennent à cœur. Votre engagement bénévole renforce le tissu social et vous offre l'opportunité
de développer de nouvelles compétences.  Continuez à faire une différence positive.
</div>
<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../images/1erpage.jpg"), "html", null, true);
        echo "\" class=\"w-50\" alt=\"responsive-image\">

<div class=\"workchoice\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image1\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image2\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image3\">
</div>

<section class=\"questionnaire-body p-4 border rounded mx-auto\" id=\"slide-0\">

<section class=\"questionnaire-body p-4 border rounded mx-auto\">

    <h3 class=\"text-center mb-4\">
        Question
    </h3>

    <div class=\"d-grid gap-2\">
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>
    </div>

</section>

<script>
const escapeXSS = (text) => {
    if (typeof text !== 'string') return text;
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '\"': '&quot;',
        \"'\": '&#039;',
    };
    return text.replace(/[&<>\"']/g, m => map[m]);
};

const questionnaireBody = document.querySelector('.questionnaire-body');

const filters = ";
        // line 78
        echo json_encode((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 78, $this->source); })()));
        echo ";
const associations = ";
        // line 79
        echo json_encode((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 79, $this->source); })()));
        echo ";

console.log('tous les filtres', filters);
console.log('toutes les assos', associations);

const regions = filters.filter(filter => filter.type === 'region');
const modeDeTravail = filters.filter(filter => filter.type === 'mode-de-travail');
const disponibilites = filters.filter(filter => filter.type === 'disponibilite');
const missions = filters.filter(filter => filter.type === 'mission');

let etape = 0;
const filtersSelected = {
    region: null,
    modeDeTravail: null,
    disponibilite: null,
    mission: null,
};

const questions = [
    {
        title: 'J\\'habite dans la région :',
        type: 'region',
        filters: regions,
    },
    {
        title: 'Je préfère effectuer ma mission :',
        type: 'modeDeTravail',
        filters: modeDeTravail,
    },
    {
        title: 'Je suis disponible :',
        type: 'disponibilite',
        filters: disponibilites,
    },
    {
        title: 'Ma mission de mentorat, je l\\'imagine :',
        type: 'mission',
        filters: missions,
    },
];

const displayQuestion = () => {
    const question = questions[etape];
    const filters = question ? question.filters : [];
    const filtersHTML = filters
        .map(filter => `<button type=\"button\" class=\"btn btn-outline-dark btn-lg\" data-id=\"\${filter.id}\">\${escapeXSS(filter.text)}</button>`)
        .join('');

    const assos = getFilteredAssociations();
    const nbAssos = assos.length;

    questionnaireBody.innerHTML = `
    <h3 class=\"text-center mb-4\">
        \${escapeXSS(question ? question.title : '')}
    </h3>
    <div class=\"d-grid gap-2 mb-4\">
        \${nbAssos > 0 ? filtersHTML : `<p class=\"text-center text-danger\">Aucune association ne correspond à vos critères.</p>`}
        \${etape > 0 ? '<button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>' : ''}
    </div>
    <ul>
        \${assos.map(asso => '<li>' + escapeXSS(asso.name) + '</li>').join('')}
    </ul>
    `;

    console.log('etape', etape);
    console.log('filtersSelected', filtersSelected);
    console.log('nbAssos', nbAssos);
    console.log('assos', assos);

    const btns = questionnaireBody.querySelectorAll('button');
    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            if (btn.textContent === 'Retour') {
                filtersSelected[questions[etape - 1].type] = null;
                etape--;
            } else {
                const id = parseInt(btn.getAttribute('data-id'));
                filtersSelected[question.type] = id;
                etape++;
            }

            if (etape > 3) {
                displayResult();
            } else {
                displayQuestion();
            }
        });
    });
};

const getFilteredAssociations = () => {
    return associations.filter(asso => {
        if (
            filtersSelected.region !== null
            && !asso.filters.includes(filtersSelected.region)
        ) {
            return false;
        }
        if (
            filtersSelected.modeDeTravail !== null
            && !asso.filters.includes(filtersSelected.modeDeTravail)
        ) {
            return false;
        }
        if (
            filtersSelected.disponibilite !== null
            && !asso.filters.includes(filtersSelected.disponibilite)
        ) {
            return false;
        }
        if (
            filtersSelected.mission !== null
            && !asso.filters.includes(filtersSelected.mission)
        ) {
            return false;
        }
        return true;
    });
};

const displayResult = () => {
    const assos = getFilteredAssociations();

    questionnaireBody.innerHTML = `
    <h3 class=\"text-center mb-4\">
        Résultat
    </h3>
    <div class=\"d-grid gap-2\">
        \${assos.map(asso => `
            <div class=\"card\">
                <div class=\"card-body\">
                    \${escapeXSS(asso.name)}
                </div>
            </div>
        `).join('')}
        \${assos.length === 0 ? '<p class=\"text-center text-danger\">Aucune association ne correspond à vos critères.</p>' : ''}
        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>
    </div>
    `;

    questionnaireBody.querySelector('button').addEventListener('click', () => {
        etape--;
        filtersSelected[questions[etape].type] = null;
        displayQuestion();
    });
};

displayQuestion();





";
        // line 392
        echo "
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 392,  157 => 79,  153 => 78,  110 => 38,  93 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
{{ dump() }}

{# <h1>Trouver mon asso</h1>

<div id=\"formulaire\">
    <div class=\"zone-regions\">
    </div>
    <div class=\"zone-mode-de-travail\">
    </div>
    <div class=\"zone-disponibilites\">
    </div>
    <div class=\"zone-missions\">
    </div>
</div>

<div id=\"assos\">
</div> #}

<style>
.questionnaire-body {
    max-width: 600px;
}
</style>

<h1 class=\"text-center mb-4\">Trouver ton association</h1>

<div class=\"container\">
Votre volonté d'investissement dans des associations est admirable.
En vous impliquant, vous faites une différence concrète dans des domaines qui vous
tiennent à cœur. Votre engagement bénévole renforce le tissu social et vous offre l'opportunité
de développer de nouvelles compétences.  Continuez à faire une différence positive.
</div>
<img src=\"{{ asset('../images/1erpage.jpg')}}\" class=\"w-50\" alt=\"responsive-image\">

<div class=\"workchoice\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image1\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image2\">
<img src=\"../images/jeuxcartes.png\" class=\"w-25 image3\">
</div>

<section class=\"questionnaire-body p-4 border rounded mx-auto\" id=\"slide-0\">

<section class=\"questionnaire-body p-4 border rounded mx-auto\">

    <h3 class=\"text-center mb-4\">
        Question
    </h3>

    <div class=\"d-grid gap-2\">
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-dark btn-lg\">Réponse</button>
        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>
    </div>

</section>

<script>
const escapeXSS = (text) => {
    if (typeof text !== 'string') return text;
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '\"': '&quot;',
        \"'\": '&#039;',
    };
    return text.replace(/[&<>\"']/g, m => map[m]);
};

const questionnaireBody = document.querySelector('.questionnaire-body');

const filters = {{ filters|json_encode()|raw }};
const associations = {{ associations|json_encode()|raw }};

console.log('tous les filtres', filters);
console.log('toutes les assos', associations);

const regions = filters.filter(filter => filter.type === 'region');
const modeDeTravail = filters.filter(filter => filter.type === 'mode-de-travail');
const disponibilites = filters.filter(filter => filter.type === 'disponibilite');
const missions = filters.filter(filter => filter.type === 'mission');

let etape = 0;
const filtersSelected = {
    region: null,
    modeDeTravail: null,
    disponibilite: null,
    mission: null,
};

const questions = [
    {
        title: 'J\\'habite dans la région :',
        type: 'region',
        filters: regions,
    },
    {
        title: 'Je préfère effectuer ma mission :',
        type: 'modeDeTravail',
        filters: modeDeTravail,
    },
    {
        title: 'Je suis disponible :',
        type: 'disponibilite',
        filters: disponibilites,
    },
    {
        title: 'Ma mission de mentorat, je l\\'imagine :',
        type: 'mission',
        filters: missions,
    },
];

const displayQuestion = () => {
    const question = questions[etape];
    const filters = question ? question.filters : [];
    const filtersHTML = filters
        .map(filter => `<button type=\"button\" class=\"btn btn-outline-dark btn-lg\" data-id=\"\${filter.id}\">\${escapeXSS(filter.text)}</button>`)
        .join('');

    const assos = getFilteredAssociations();
    const nbAssos = assos.length;

    questionnaireBody.innerHTML = `
    <h3 class=\"text-center mb-4\">
        \${escapeXSS(question ? question.title : '')}
    </h3>
    <div class=\"d-grid gap-2 mb-4\">
        \${nbAssos > 0 ? filtersHTML : `<p class=\"text-center text-danger\">Aucune association ne correspond à vos critères.</p>`}
        \${etape > 0 ? '<button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>' : ''}
    </div>
    <ul>
        \${assos.map(asso => '<li>' + escapeXSS(asso.name) + '</li>').join('')}
    </ul>
    `;

    console.log('etape', etape);
    console.log('filtersSelected', filtersSelected);
    console.log('nbAssos', nbAssos);
    console.log('assos', assos);

    const btns = questionnaireBody.querySelectorAll('button');
    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            if (btn.textContent === 'Retour') {
                filtersSelected[questions[etape - 1].type] = null;
                etape--;
            } else {
                const id = parseInt(btn.getAttribute('data-id'));
                filtersSelected[question.type] = id;
                etape++;
            }

            if (etape > 3) {
                displayResult();
            } else {
                displayQuestion();
            }
        });
    });
};

const getFilteredAssociations = () => {
    return associations.filter(asso => {
        if (
            filtersSelected.region !== null
            && !asso.filters.includes(filtersSelected.region)
        ) {
            return false;
        }
        if (
            filtersSelected.modeDeTravail !== null
            && !asso.filters.includes(filtersSelected.modeDeTravail)
        ) {
            return false;
        }
        if (
            filtersSelected.disponibilite !== null
            && !asso.filters.includes(filtersSelected.disponibilite)
        ) {
            return false;
        }
        if (
            filtersSelected.mission !== null
            && !asso.filters.includes(filtersSelected.mission)
        ) {
            return false;
        }
        return true;
    });
};

const displayResult = () => {
    const assos = getFilteredAssociations();

    questionnaireBody.innerHTML = `
    <h3 class=\"text-center mb-4\">
        Résultat
    </h3>
    <div class=\"d-grid gap-2\">
        \${assos.map(asso => `
            <div class=\"card\">
                <div class=\"card-body\">
                    \${escapeXSS(asso.name)}
                </div>
            </div>
        `).join('')}
        \${assos.length === 0 ? '<p class=\"text-center text-danger\">Aucune association ne correspond à vos critères.</p>' : ''}
        <button type=\"button\" class=\"btn btn-outline-danger btn-lg\">Retour</button>
    </div>
    `;

    questionnaireBody.querySelector('button').addEventListener('click', () => {
        etape--;
        filtersSelected[questions[etape].type] = null;
        displayQuestion();
    });
};

displayQuestion();





{# const zoneAssos = document.querySelector('#assos');

const zoneRegions = document.querySelector('.zone-regions');
const zoneModeDeTravail = document.querySelector('.zone-mode-de-travail');
const zoneDisponibilites = document.querySelector('.zone-disponibilites');
const zoneMissions = document.querySelector('.zone-missions');

const regions = filters.filter(filter => filter.type === 'region');
const modeDeTravail = filters.filter(filter => filter.type === 'mode-de-travail');
const disponibilites = filters.filter(filter => filter.type === 'disponibilite');
const missions = filters.filter(filter => filter.type === 'mission');

const filtersSelected = {
    regions: [],
    modeDeTravail: [],
    disponibilites: [],
    missions: [],
};

const escapeXSS = (text) => {
    if (typeof text !== 'string') return text;
    const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '\"': '&quot;',
        \"'\": '&#039;',
    };
    return text.replace(/[&<>\"']/g, m => map[m]);
};

/*
zoneRegions.innerHTML = `
<label for=\"region\">Région</label>
<select name=\"region\" id=\"region\" multiple>
    \${regions.map(region => `<option value=\"\${region.id}\">\${region.text}</option>`).join('')}
</select>
`;

zoneModeDeTravail.innerHTML = `
<label for=\"mode-de-travail\">Mode de travail</label>
<select name=\"mode-de-travail\" id=\"mode-de-travail\" multiple>
    \${modeDeTravail.map(mode => `<option value=\"\${mode.id}\">\${mode.text}</option>`).join('')}
</select>
`;

zoneDisponibilites.innerHTML = `
<label for=\"disponibilite\">Disponibilité</label>
<select name=\"disponibilite\" id=\"disponibilite\" multiple>
    \${disponibilites.map(disponibilite => `<option value=\"\${disponibilite.id}\">\${disponibilite.text}</option>`).join('')}
</select>
`;

zoneMissions.innerHTML = `
<label for=\"mission\">Mission</label>
<select name=\"mission\" id=\"mission\" multiple>
    \${missions.map(mission => `<option value=\"\${mission.id}\">\${mission.text}</option>`).join('')}
</select>
`;
*/

const createSelect = (zone, label, type) => {
    zone.innerHTML = `
    <label for=\"\${type}\">\${label}</label>
    <select name=\"\${type}\" id=\"\${type}\" multiple>
        \${filters.filter(filter => filter.type === type).map(filter => `<option value=\"\${escapeXSS(filter.id)}\">\${escapeXSS(filter.text)}</option>`).join('')}
    </select>
    `;
};

createSelect(zoneRegions, 'Région', 'region');
createSelect(zoneModeDeTravail, 'Mode de travail', 'mode-de-travail');
createSelect(zoneDisponibilites, 'Disponibilité', 'disponibilite');
createSelect(zoneMissions, 'Mission', 'mission');

const displayAssos = () => {
    const assos = associations.filter(asso => {
        if (
            filtersSelected.regions.length > 0
            && !asso.filters.some(filterId => filtersSelected.regions.includes(filterId))
        ) {
            return false;
        }
        if (
            filtersSelected.modeDeTravail.length > 0
            && !asso.filters.some(filterId => filtersSelected.modeDeTravail.includes(filterId))
        ) {
            return false;
        }
        if (
            filtersSelected.disponibilites.length > 0
            && !asso.filters.some(filterId => filtersSelected.disponibilites.includes(filterId))
        ) {
            return false;
        }
        if (
            filtersSelected.missions.length > 0
            && !asso.filters.some(filterId => filtersSelected.missions.includes(filterId))
        ) {
            return false;
        }
        return true;
    });

    zoneAssos.innerHTML = `
    <ul>
        \${assos.map(asso => `<li>\${escapeXSS(asso.name)}</li>`).join('')}
    </ul>
    `;
};

const getSelectValues = (selectElement) => {
    if (!selectElement) return [];
    return Array.from(selectElement.selectedOptions)
        .filter(option => option.selected)
        .map(option => parseInt(option.value));
};

/*

zoneRegions.querySelector('select').addEventListener('change', (event) => {
    const selectedValues = getSelectValues(event.target);
    filtersSelected.regions = selectedValues;
    displayAssos();
});

zoneModeDeTravail.querySelector('select').addEventListener('change', (event) => {
    const selectedValues = getSelectValues(event.target);
    filtersSelected.modeDeTravail = selectedValues;
    displayAssos();
});

zoneDisponibilites.querySelector('select').addEventListener('change', (event) => {
    const selectedValues = getSelectValues(event.target);
    filtersSelected.disponibilites = selectedValues;
    displayAssos();
});

zoneMissions.querySelector('select').addEventListener('change', (event) => {
    const selectedValues = getSelectValues(event.target);
    filtersSelected.missions = selectedValues;
    displayAssos();
});

*/

const createSelectListener = (zone, type) => {
    zone.querySelector('select').addEventListener('change', (event) => {
        const selectedValues = getSelectValues(event.target);
        filtersSelected[type] = selectedValues;
        displayAssos();
    });
};

createSelectListener(zoneRegions, 'regions');
createSelectListener(zoneModeDeTravail, 'modeDeTravail');
createSelectListener(zoneDisponibilites, 'disponibilites');
createSelectListener(zoneMissions, 'missions');

displayAssos(); #}

</script>

{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/php-decodeuse/societeGenerale/templates/home/index.html.twig");
    }
}
