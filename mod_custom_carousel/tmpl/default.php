
<?php
defined('_JEXEC') or die;
$document = JFactory::getApplication()->getDocument();
$document->addStyleSheet('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
$document->addScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
?>
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <?php foreach ($items as $index => $item): ?>
            <?php
            // Extract the numeric part from the index
            $numericIndex = (int)filter_var($index, FILTER_SANITIZE_NUMBER_INT);
            ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $numericIndex; ?>" class="<?php echo $numericIndex === 0 ? 'active' : ''; ?>" aria-current="<?php echo $numericIndex === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $numericIndex + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($items as $index => $item): ?>
            <?php
            // Extract the numeric part from the index
            $numericIndex = (int)filter_var($index, FILTER_SANITIZE_NUMBER_INT);
            ?>
            <div class="carousel-item <?php echo $numericIndex === 0 ? 'active' : ''; ?>" data-bs-interval="100">
                <img src="<?php echo $item['image']; ?>" class="d-block w-100" style="width: 200px !important; height: 200px;" alt="<?php echo $item['title']; ?>">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-black"><?php echo $item['title']; ?></h5>
                    <p class="text-black"><?php echo $item['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

