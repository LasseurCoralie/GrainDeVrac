import styled from 'styled-components';
import theme from '../../../theme/theme';

const FooterStyled = styled.footer`
  background-color: ${theme.colors.purple};
  color: white;
  text-align: center;
  font-size: .9em;
  margin: 0;
  padding: 1.5em .5em .5em;
  
  div{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-bottom: 1em;

    div {
      margin: 0 1em;
      flex: 1;
    }
  }
  
  div>a>img {
    max-width: 100px;
    margin: 0 1em;
  }

  div.img-zn {
    border-left: 1px solid white;
    border-right: 1px solid white;
  }

  ul.brand-info {
    text-align: right;
  }

  ul.social-media {
    text-align: left;
  }

  ul {
    list-style: none;
    text-align:
    margin: 0;
    padding: 0;

    li {
      margin-bottom: .5em;
    }

    li>a {
      color : white;
      text-decoration: none;

      :hover {
        text-decoration: underline;
      }
    }
  }

  p {
    font-size: .7em;

    a {
      color: white;
      text-decoration: none;

      :hover {
        text-decoration: underline;
      }
    }
  }
`;

export default FooterStyled;