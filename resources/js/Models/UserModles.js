class User {
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
        this.avatar = data.image || 'user1.png';
        this.userDetail = data.user_detail ? new UserDetail(data.user_detail) : null;
    }
}

class UserDetail {
    constructor(data) {
        this.id = data.id || null;
        this.userId = data.user_id || null;
        this.agencyId = data.agency_id || null;
        this.address = data.address || null;
        this.phone = data.phone || '';
        this.createdAt = data.created_at || new Date();
        this.updatedAt = data.updated_at || new Date();
        this.userSocialLinks = data.user_social_link ? data.user_social_link.map(link => new UserSocialLink(link)) : [];
    }
}

class UserSocialLink {
    constructor(data) {
        this.id = data.id || null;
        this.userDetailsId = data.user_details_id || null;
        this.platform = data.platform || '';
        this.label = data.label || '';
        this.url = data.url || null;
        this.username = data.username || null;
        this.createdAt = data.created_at || new Date();
        this.updatedAt = data.updated_at || new Date();
    }
}

export {User}

