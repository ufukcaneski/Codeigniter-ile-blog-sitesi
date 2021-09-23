<?php header('Content-type: text/xml'); ?>
<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo base_url('projects');?></loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo base_url('blog');?></loc>
        <priority>1.0</priority>
    </url>
    <?php foreach($listele as $listele) { ?>
    <url>
        <loc><?php echo base_url('blog/'); echo $listele->sef; ?></loc>
        <priority>0.5</priority>
    </url>
    <?php } ?>
    <url>
        <loc><?php echo base_url('resume');?></loc>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo base_url('contact');?></loc>
        <priority>1.0</priority>
    </url>
    
</urlset>