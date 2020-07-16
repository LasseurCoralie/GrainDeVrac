import React from 'react';

// == Component
import PageTitle from '../../small_components/PageTitle/PageTitle';

// == Style 
import ContactStyled from './ContactStyled';

const Contact = () => {
  return (
    <ContactStyled>
      <PageTitle title="Contactez-nous" content="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo in exercitationem, fugiat atque voluptate numquam." />
      <h3>Par téléphone</h3>
      <PageTitle title="01 23 45 67 89" content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate pariatur porro ullam non doloribus quam vel similique. Perferendis odit ducimus reprehenderit vero error, aliquam magnam, beatae esse aspernatur velit magni." />
    </ContactStyled>
  );
};

export default Contact;