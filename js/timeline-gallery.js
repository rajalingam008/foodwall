     var images = [
                'images/post-images/3.jpg',
                'images/post-images/4.jpg',
                'images/post-images/1.jpg',
                'images/post-images/7.jpg',
                'images/post-images/8.jpg',
                'images/post-images/11.jpg'
            ];

            $(function() {

                $('#gallery1').imagesGrid({
                    images: images
                });
                $('#gallery2').imagesGrid({
                    images: images.slice(0, 5)
                });
                $('#gallery3').imagesGrid({
                    images: images.slice(0, 4)
                });
                $('#gallery4').imagesGrid({
                    images: images.slice(0, 7)
                });
                $('#gallery5').imagesGrid({
                    images: images.slice(0, 2)
                });
                $('#gallery6').imagesGrid({
                    images: images.slice(0, 1)
                });
                $('#gallery7').imagesGrid({
                    images: [
                        'images/post-images/3.jpg',
                'images/post-images/4.jpg',
                'images/post-images/1.jpg',
                'images/post-images/7.jpg',
                'images/post-images/8.jpg',
                'images/post-images/11.jpg'
                    ],
                    align: true,
                    getViewAllText: function(imgsCount) { return 'View all' }
                });

            });