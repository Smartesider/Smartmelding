<?php get_header(); ?>
<style>
.share-btn {
    background: #f57c00;
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    text-decoration: none;
    margin-top: 10px;
    display: inline-block;
}
</style>
<div class="smartmelding-container">
    <div class="smartmelding-header">
        <img src="<?php echo SMARTMELDING_URL . 'assets/icons/sun.svg'; ?>" class="smartmelding-icon" alt="Værikon" />
        <h1>TulleVær for <?php echo esc_html(get_query_var('smartmelding_sted')); ?></h1>
    </div>
    <div class="smartmelding-summary">
        <?php echo nl2br(esc_html(smartmelding_generate_summary(smartmelding_get_weather_data(get_query_var('smartmelding_sted'))))); ?>
        <br><br>
        <strong>Langtidsvarsel:</strong><br>
        <?php echo nl2br(esc_html(smartmelding_generate_forecast_summary([]))); ?>
    </div>
    <div class="smartmelding-karakter">
        Værkarakter: <?php echo esc_html(smartmelding_generate_character_grade()); ?>
    </div>
    <a class="share-btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(home_url('/vaer/' . get_query_var('smartmelding_sted'))); ?>" target="_blank">Del på Facebook</a>
</div>
<?php get_footer(); ?>
