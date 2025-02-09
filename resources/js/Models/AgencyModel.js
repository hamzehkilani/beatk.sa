class UserAgancy {
    constructor(data) {
        this.id = data.id || null;
        this.createdById = data.created_by_id || null;
        this.name = data.name || '';
        this.email = data.email || '';
        this.image = data.image || null;
        this.role = data.role || 'user';
        this.permissions = data.permissions || null;
        this.isConfirmed = data.is_confirmed || null;
        this.confirmedAt = data.confirmed_at || null;
        this.isActivated = data.is_activated || null;
        this.activatedAt = data.activated_at || null;
        this.token = data.token || null;
        this.emailVerifiedAt = data.email_verified_at || null;
        this.createdAt = data.created_at || new Date();
        this.updatedAt = data.updated_at || new Date();
        this.deletedAt = data.deleted_at || null;
        this.avatar = data.image || '';
        this.userDetail = data.agency ? new Agency(data.agency) : null;
    }
}


class UserSocialLink {
    constructor(data) {
        this.id = data.id || null;
        this.platform = data.platform || '';
        this.label = data.label || '';
        this.url = data.url || null;
        this.username = data.username || null;
        this.createdAt = data.created_at || null;
        this.updatedAt = data.updated_at || null;
    }
}

class Agency {
    constructor(data) {
        this.id = data.id || null;
        this.name = data.name || '';
        this.userId = data.user_id || null;
        this.address = data.address || null;
        this.phone = data.phone || '';
        this.createdAt = data.created_at || null;
        this.updatedAt = data.updated_at || null;
        this.socialLinks = data.social_links ? data.social_links.map(link => new UserSocialLink(link)) : [];
    }
}

export {UserAgancy}


