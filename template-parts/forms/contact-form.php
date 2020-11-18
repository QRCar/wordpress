<div class="form-group">
    <label for="your-name" class="required">Votre nom</label>
    [text* your-name id:your-name class:form-control]
</div>

<div class="form-group">
    <label for="your-email" class="required">Votre adresse de messagerie</label>
    [email* your-email id:your-email class:form-control]
</div>

<div class="form-group">
    <label for="your-subject" class="required">Objet</label>
    [text your-subject id:your-subject class:form-control]
</div>

<div class="form-group">
    <label for="your-message" class="required">Votre message</label>
    [textarea your-message id:your-message class:form-control]
</div>
[submit class:btn class:btn-primary "Envoyer"]