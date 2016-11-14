var Comment = function () {
    var self = {
        parent_id: null,
        commentName: '#comment-form',
        cancelName: '#cancel-comment-reply-link',
        commentWrapName: '#wrap-comment-form',
        messageName: '#comment_flash_message',
    };
    return {

        replay: function (t, id) {
            self.parent_id = id;
            this.clearMessage();
            var commentForm = $(self.commentName).clone();
            $(self.commentName).remove();
            $('#comment-' + self.parent_id).find('.comment-content').append(commentForm);
            $(self.cancelName).show()
        },

        saveButton: function (event) {
            event.preventDefault();
            $(self.commentName + ' form').request('onSaveCommentButton', {
                data: {'parent_id': self.parent_id},
                success: function (data) {
                    if (data['message']) {
                        Comment.addMessage(data['message'])
                    } else if (data['content']) {
                        Comment.addComment(data['content']);
                        $(self.cancelName).trigger('click');
                        $(self.commentName + ' form').trigger('reset');
                    }
                }
            });
        },

        addComment: function (content) {
            var commentBlock = $('#comment-' + self.parent_id);
            if (self.parent_id == null) {
                $('.comments ul').append(content);
            } else if (commentBlock.next('ul').length) {
                commentBlock.next('ul').append(content);
            } else {
                commentBlock.append($('<ul>').html(content));
            }
            this.countIncrement()
        },

        countIncrement: function () {
            var data = $('#comments-count').text();
            if ($.isNumeric(data)) {
                $('#comments-count').text(parseInt(data) + 1);
            }

        },

        addMessage: function (data) {
            var html = $('<ul>');
            $.each(data, function (i, item) {
                html.append($('<li>').text(item[0]));
            });
            $(self.messageName).html($("<div>").addClass('alert alert-danger').append(html));
        },

        clearMessage: function () {
            $(self.messageName).empty();
        },

        cancel: function () {
            self.parent_id = null;
            this.clearMessage();
            $(self.cancelName).hide();
            var commentForm = $(self.commentName).clone();
            $(self.commentName).remove();
            $(self.commentWrapName).html(commentForm);

        }
    }
}();

