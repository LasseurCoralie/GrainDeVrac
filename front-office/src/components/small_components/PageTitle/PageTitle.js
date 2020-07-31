import React from 'react';
import PropTypes from 'prop-types';

// == Style 
import PageTitleStyled from './PageTitleStyled';

const PageTitle = ({ title, content }) => {
  return (
    <PageTitleStyled>
      <h2 className="title">{title}</h2>
      <p className="sub-txt">{content}</p>
    </PageTitleStyled>
    
  );
};

PageTitle.propTypes = {
  title: PropTypes.string.isRequired,
  content: PropTypes.string.isRequired
};

export default PageTitle;