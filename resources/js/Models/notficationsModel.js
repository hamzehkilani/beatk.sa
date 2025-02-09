class NotificationModel {
    constructor({
        id = null,
        title = '',
        message = '',
        type = '',
        notifiable_type = null,
        notifiable_id = null,
        created_at = null,
        updated_at = null
    } = {}) {
        this.id = id;
        this.title = title;
        this.message = message;
        this.type = type;
        this.notifiable_type = notifiable_type;
        this.notifiable_id = notifiable_id;
        this.created_at = created_at;
        this.updated_at = updated_at;
    }


}



export {NotificationModel}
