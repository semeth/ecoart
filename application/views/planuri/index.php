<?php echo $header; ?>
<div class="page">
    <div class="container">
        <?php echo $jumbo; ?>
        <p class="text-center page-description">Fiecare proiect contine o tabela de progress. Dezvoltarea si finalizarea proiectului se va face conform acestuia informand partenerul statusul in care proiectul se afla:</p>
        <h4 class="text-center">
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Planning</span>
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Aquiring Resources</span>
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Developing</span>
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Deployment on test domain</span>
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Testing & Feedbacks</span>
            <span class="badge bg-blue d-block d-sm-inline-block mb-2 mb-0">Deployment on production</span>
        </h4>
        <div class="price-plan-table">
            <?php foreach($plans as $plan): ?>
                <div class="price-plan-item <?php echo $plan->color; ?>">
                    <div class="price-plan-header">
                        <h3><?php echo $plan->title; ?></h3>
                        <p></p>
                    </div>
                    <div class="price-plan-price">
                        <h2><?php echo $plan->price; ?>/<span><?php echo $plan->type; ?></span></h2>
                    </div>
                    <div class="price-plan-content">
                        <p><?php echo $plan->content; ?></p>
                        <?php if($plan->optional): ?>
                            <p>Plan de mentenanta optional</p>
                        <?php endif; ?>
                    </div>
                    <div class="price-plan-button text-center">
                        <button class="btn btn-outline-light btn-lg btn-rounded">Alege</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php echo $footer; ?>