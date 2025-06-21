import React from 'react';

const Footer = () => (
    <footer style={{
        background: '#f1f1f1',
        padding: '16px 0',
        textAlign: 'center',
        left: 0,
        bottom: 0,
        width: '100%',
        fontSize: '14px',
        color: '#555'
    }}>
        © {new Date().getFullYear()} ShoppeeProject. All rights reserved.
    </footer>
);

export default Footer;