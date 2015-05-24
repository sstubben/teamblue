Meteor.startup(function() {
    if (Meteor.isClient) {
        return SEO.config({
            title: 'Team Blue - Lion & Lion + NagaDDB',
            meta: {
                'description': 'Lion & Lion and NagaDDB partners under the "Team Blue" name'
            },
            og: {
                'image': 'star-circle.png' 
           }
        });
    }
});