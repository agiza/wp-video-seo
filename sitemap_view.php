<?php echo '<'.'?xml version="1.0" encoding="UTF-8"?'.'>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
<?php foreach( $videos as $video ): ?> 
   <url> 
     <loc><?php echo $video['permalink'] ?></loc>
     <video:video>
       <video:thumbnail_loc><?php echo $video['thumbnail'] ?></video:thumbnail_loc> 
       <video:title><?php echo $video['title'] ?></video:title>
       <video:description><?php echo $video['description'] ?></video:description>
       <video:player_loc allow_embed="yes" autoplay="ap=1">
       <?php echo $video['player_loc'] ?></video:player_loc>
			 <video:duration><?php echo $video['duration'] ?></video:duration>
			 <?php if (strlen($video['ratings']) > 0) { ?>
			 <video:rating><?php echo $video['ratings'] ?></video:rating> 
			 <?php } ?>
       <video:view_count><?php echo $video['view_count'] ?></video:view_count>
       <video:publication_date><?php echo $video['publish_date'] ?></video:publication_date>
       <?php foreach( $video['tags'] as $tag ): ?>
       <video:tag><?php echo $tag->name; ?></video:tag>
       <?php endforeach; ?>
			 <?php if (count($video['categories']) > 0) { ?>
			 <video:category><?php echo implode(" , ", $video['categories']); ?></video:category>
			 <?php } ?>
       <video:uploader><?php echo $video['author'] ?></video:uploader>
       <video:live>no</video:live>
     </video:video> 
   </url>
<?php endforeach; ?> 
</urlset>
